<?php


namespace Library;


class Url
{
    private $url;

    private $rewrite = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function addRewrite($rewrite) {
        $this->rewrite[] = $rewrite;
    }

    public function link($route, $args = '', $js = false) {
        $url = $this->url . 'index.php?route=' . (string)$route;

        if ($args) {
            if (!$js) {
                $amp = '&amp;';
            } else {
                $amp = '&';
            }

            if (is_array($args)) {
                $url .= $amp . http_build_query($args, '', $amp);
            } else {
                $url .= str_replace('&', $amp, '&' . ltrim($args, '&'));
            }
        }

        foreach ($this->rewrite as $rewrite) {
            $url = $rewrite->rewrite($url);
        }

        return $url;
    }
}