<?php

namespace App\Transformers;

use App\Ranking;
use League\Fractal\TransformerAbstract;

class RankingTransformer extends TransformerAbstract
{
/**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Ranking $ranking)
    {
        return [
            'hero' => $ranking->hero,
            'likes' => $ranking->likes,
            'dont_likes' => $ranking->dont_likes
        ];
    }
}