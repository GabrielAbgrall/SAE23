<?php

require_once 'utils.php';

function get_all_files() {
    return load_data('drive/files');
}

function get_file($path) {
    foreach(get_all_files() as $f) {
        if($f['path'] == $path) return $f;
    }
}

function get_files($user, $dir) {
    $files = array();

    if($dir[-1] != '/') $dir .= '/';

    foreach(get_all_files() as $f) {
        if(has_access($f, $user) && str_starts_with($f['path'], $dir)) {
            $rel_path = explode('/', substr($f['path'], strlen($dir)));
            if(count($rel_path) == 1) {
                array_push($files, $f);
            }
        }
    }
    return $files;
}

function get_directories($user, $dir) {
    $dirs = array();

    if($dir[-1] != '/') $dir .= '/';

    foreach(get_all_files() as $f) {
        if(has_access($f, $user) && str_starts_with($f['path'], $dir)) {
            $rel_path = explode('/', substr($f['path'], strlen($dir)));
            if(count($rel_path) > 1) {
                array_push($dirs, $rel_path[1]);
            }
        }
    }
    return $dirs;
}

function download_file($path) {
    $path = '/data/drive'.$path;
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"" . basename($path) . "\""); 
    readfile($path);
}

function save_file($path, $file, $access_level) {
    if(!isset($file)) return false;
    if($path[-1] != '/') $path .= '/';

    move_uploaded_file($file["tmp_name"], "data/drive".$path.$file['name']);
    
    if(!get_file($path.$file['name'])) {
        $files = get_all_files();
        $f = array(
            'name' => $file['name'],
            'path' => $path.$file['name'],
            'access_level' => $access_level
        );
        array_push($files, $f);
        save_data('drive/files', $files);
    } else {
        $files = array();
        foreach(get_all_files() as $f) {
            if($f['path'] == $path.$file['name']) $f['access_level'] = $access_level;
            array_push($files, $f);
        }
        save_data('drive/files', $files);
    }
    return true;
}

function delete_file($path) {
    if(null===get_file($path)) return false;
    unlink('data/drive'.$path);

    $files = array();
    foreach(get_all_files() as $f) {
        if($f['path']!=$path) array_push($files, $f);
    }
    save_data('drive/files', $files);
    return true;

}

function has_access($file, $user) {
    if(!isset($file)) return false;

    require_once 'models/users.php';
    if(has_permission($file['access_level'], $user)) return true;
    else return false;
}

?>