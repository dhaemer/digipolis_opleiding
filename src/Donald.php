<?php

namespace Quote;

class Donald {
  protected $path = "https://api.whatdoestrumpthink.com/api/v1/quotes/";

  function random() {
    $url = $this->path . "random";

    $output = json_decode(file_get_contents($url));

    return $output->message;
  }

  function all() {
    $output = json_decode(file_get_contents($this->path));

    return $output;
  }
}
