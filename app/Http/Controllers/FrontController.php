<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $comments = [
            'author' => 'CeciEstUnPseudo',
            'published_at' => 'Il y a 2 heures',
            'comment' => 'Praesent hendrerit risus in quam blandit, nec tempor nisl pharetra. Donec vitae tincidunt lorem. Curabitur maximus, mi quis tincidunt ullamcorper, massa orci pharetra purus, quis dictum lacus enim id nulla.'
        ];

        $items = [
            0 => [
            'title' => 'Stranger Things 2 Amazing New Posters',
            'description' => 'La deuxième saison de Stranger Things approche à grands pas. Netflix dévoile donc...',
            'count_likes' => 20,
            'comments' => $comments,
            'count_comments' => 10,
            'image' => [
                'src' => 'imgs/image1.jpg',
                'srcset' => 'imgs/image1@2x.jpg, imgs/image1@3x.jpg'
            ]
        ],
            1 => [
            'title' => 'Beautiful Series Across the USA',
            'description' => 'Le photographe Akos Major armé de son Mamiya7, chargé de pellicules Kodak Portra 400...',
            'count_likes' => 65,
            'comments' => $comments,
            'count_comments' => 22,
            'image' => [
                'src' => 'imgs/image2.jpg',
                'srcset' => 'imgs/image2@2x.jpg, imgs/image2@3x.jpg'
            ]
        ],
            2 => [
                'title' => 'Game of Thrones Crystal Made Artworks by Dries Ketels',
                'description' => 'Dans cette série de tableaux, l’artiste Dries Ketels se penche sur la célèbre...',
                'count_likes' => 30,
                'comments' => $comments,
                'count_comments' => 15,
                'image' => [
                    'src' => 'imgs/image3.jpg',
                    'srcset' => 'imgs/image3@2x.jpg, imgs/image3@3x.jpg'
                ]
            ],
            3 => [
                'title' => 'Colorful Doors of Dublin Illustrations',
                'description' => 'Passionné par l’art et le design, Al Power est un illustrateur irlandais installé à...',
                'count_likes' => 16,
                'comments' => $comments,
                'count_comments' => 10,
                'image' => [
                    'src' => 'imgs/image4.jpg',
                    'srcset' => 'imgs/image4@2x.jpg, imgs/image4@3x.jpg'
                ]
            ],
            4 => [
                'title' => 'Alexander Semenov Expedition to Shoot...',
                'description' => 'Alexander Semenov est un photographe marin et biologiste qui est en train de conduire...',
                'count_likes' => 32,
                'comments' => $comments,
                'count_comments' => 14,
                'image' => [
                    'src' => 'imgs/image5.jpg',
                    'srcset' => 'imgs/image5@2x.jpg, imgs/image5@3x.jpg'
                ]
            ],
            5 => [
                'title' => 'Ghostly Floating Installation by Edoardo...',
                'description' => 'Edoardo Tresoldi explore le concept de « fantôme » à travers ses incroyables...',
                'count_likes' => 25,
                'comments' => $comments,
                'count_comments' => 0,
                'image' => [
                    'src' => 'imgs/image6.jpg',
                    'srcset' => 'imgs/image6@2x.jpg, imgs/image6@3x.jpg'
                ]
            ]
        ];

        return view('front.index', compact('items'));
    }

    public function addComment(Request $request)
    {
        if($request->ajax())
            return response()->json();
    }
}
