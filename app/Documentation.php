<?php

namespace App;
use File;

class Documentation
{
    public function get($file='documentation.md')
    {
      $content = File::get($this->path($file));
      return $this->replaceLinks($content);
    }
}
