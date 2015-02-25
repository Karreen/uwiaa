<?php

function errors_for($attribute, $errors)
{
    $errors->first($attribute, '<span class="error">:message</span>');
}

function link_to_profile($text = 'Profile')
{
    return link_to('/' . Auth::user()->username, $text);
}

//{!! $errors->first('username', '<span class="error">:message</span>') !!}