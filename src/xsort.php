<?php

function xsort(&$nodes, $child_name, $order = SORT_ASC) {
    $sort_proxy = array();

    foreach ($nodes as $k => $node) {
        $sort_proxy[$k] = (string) $node->$child_name;
    }

    array_multisort($sort_proxy, $order, $nodes);
}