<?php

function simplify_ipv6($ipv6) {
    return inet_ntop(inet_pton($ipv6));
}