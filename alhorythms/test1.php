<?php

function removeDuplicates(SinglyLinkedListNode $rootNode): SinglyLinkedListNode {
    $node = $rootNode;

    while ($node->next) {
        if ($node->data !== $node->next->data) {
            $node = $node->next;
            continue;
        }

        $node->next = $node->next->next;
    }

    return $rootNode;
}
