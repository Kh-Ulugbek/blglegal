<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class Contract extends Model
{
    use HasFactory;

    const LOAN_ACK_TYPE = 1;
    const MEDICARE_PROOF_OF_REP_TYPE = 2;

    protected $fillable = [
        'type',
        'name',
        'content',
    ];

    public static function createFakeData()
    {
        $data = [
            [
                'type' => self::LOAN_ACK_TYPE,
                'name' => 'LOAN ACK',
                'content' => '<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laudantium maxime vero.
                                Accusantium atque blanditiis cum, dolorem ducimus earum eveniet incidunt minus
                                molestiae possimus quis ratione sequi vero voluptatem, voluptates.
                                </b>',
            ],
            [
                'type' => self::MEDICARE_PROOF_OF_REP_TYPE,
                'name' => 'MEDICARE PROOF OF REP',
                'content' => '<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laudantium maxime vero.
                                Accusantium atque blanditiis cum, dolorem ducimus earum eveniet incidunt minus
                                molestiae possimus quis ratione sequi vero voluptatem, voluptates.
                                </b>',
            ]
        ];

        foreach ($data as $item) {
            self::query()->create(
                [
                    'type' => $item['type'],
                    'name' => $item['name'],
                    'content' => $item['content'],
                ]
            );
        }
    }
}
