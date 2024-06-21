<?php

include "utils.php";

function get_groups() {
    return load_data('groups');
}

function get_group($name) {
    foreach (get_groups() as $group) {
        if ($group['name'] == $name) return $group;
    }
    return;
}

function group_exists($name) {
    return get_group($name) != null;
}

function create_group($name, $level) {
    if (group_exists($name)) return false;

    $group = array(
        'name' => $name,
        'level' => $level,
    );
    $groups = get_groups();
    array_push($groups, $group);
    save_data('groups', $groups);
    return true;
}

function remove_group($name) {
    $new_groups = array();
    $groups = get_groups();
    foreach ($groups as $group) {
        if ($group['name'] != $name) {
            array_push($new_groups, $group);
        }
    }
    save_data('groups', $new_groups);
}

?>