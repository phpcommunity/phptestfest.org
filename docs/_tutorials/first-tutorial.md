---
layout: page
title: First Tutorial
date: 2017-06-05 16:35:43 -05:00
author:
    name: Jane Doe
    website: http://example.com/
    twitter: https://twitter.com/phptestfest
image:
    url: /images/photos/mahir-uysal-303105.jpg
    alt: Hot air balloons
    title: BALLOONS by Mahir Uysal
    credit: Photo by [Mahir Uysal](https://unsplash.com/photos/pDfMZIsHV68).
summary: >
    This is a short description of the first tutorial. You can use
    **markdown** in the summary, if you wish. Please help us create our first
    PHP TestFest tutorial.
---

{% include wobble-message.html message="First Tutorial" class="right" %}

**I need some content!** Please [edit this page on GitHub](https://github.com/phpcommunity/phptestfest.org/edit/master/docs/_tutorials/first-tutorial.md) to help out the PHP TestFest project.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere elit et risus egestas, in convallis sapien porta. Aliquam eget libero velit. Sed blandit efficitur mi. Phasellus sit amet semper lorem. Suspendisse egestas, lorem id sodales dictum, orci enim placerat leo, et viverra erat neque a mi. Suspendisse potenti. Quisque facilisis viverra sapien vel dignissim. Integer fringilla commodo nulla. Mauris ac nulla justo. Sed nec lobortis quam. Vivamus dictum luctus neque, vel convallis nisl ullamcorper efficitur. Pellentesque sed nulla maximus, aliquet purus id, pretium nulla. Aenean sit amet tortor est. Aliquam erat volutpat.

Aliquam congue tempor dui sed rutrum. Morbi congue dui pretium tortor efficitur, et iaculis ex blandit. Phasellus ac sollicitudin ante, quis pharetra sem. Pellentesque at mi eu elit dignissim imperdiet vitae vitae urna. Pellentesque sit amet velit id ipsum placerat bibendum. Nam eget orci mattis neque molestie ultricies. Duis ut enim at quam vulputate sodales. Fusce vehicula a mauris at facilisis. Nam placerat sed lectus quis rhoncus. Donec odio purus, pretium non tristique ac, placerat at massa. Mauris turpis urna, consequat sit amet finibus congue, fringilla in quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque sed pulvinar nulla, ut fringilla orci.

In pulvinar commodo nisi nec finibus. Nam vehicula consectetur lectus ut sodales. Morbi molestie orci massa, et sollicitudin quam egestas sit amet. Phasellus at risus dui. Aliquam auctor, mi ultrices facilisis vestibulum, eros arcu molestie est, nec eleifend erat ligula quis massa. Nullam convallis semper dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum, tortor egestas vulputate vulputate, lectus ligula egestas risus, a fermentum ipsum eros in massa. Ut at dolor in augue viverra tincidunt. Phasellus consectetur metus nunc, ut aliquet magna hendrerit vel. Curabitur non felis sed sapien vestibulum consectetur non eget ante. Pellentesque gravida id nunc sed maximus.


``` php?start_inline=1
class Foo {}

$f1 = new Foo();
$f2 = new Foo();

$bar = function (Foo ...$foo) {
    foreach ($foo as $f) {
        echo get_class($f) . "\n";
    }
};

$bar($f1, $f2);

// Foo
// Foo

$bar($f1, 'bar', $f2);

// PHP Fatal error:  Uncaught TypeError: Argument 2 passed to {closure}() must 
// be an instance of Foo, string given
```

Sed lacus nisi, porta sit amet volutpat eu, rutrum quis magna. Phasellus dictum, libero id condimentum tempus, sapien velit ornare lorem, ac consectetur nunc metus scelerisque velit. Phasellus eleifend in lorem sed lacinia. Suspendisse eleifend interdum quam, non venenatis tellus pretium non. Sed consequat sed tellus et pulvinar. In mauris urna, faucibus a magna vel, consectetur sodales nulla. Phasellus magna dolor, fermentum et sagittis id, dapibus in felis. Cras consectetur justo in ante sodales faucibus. In scelerisque eu ipsum et dapibus. Nam volutpat et urna non semper.

Aliquam quis purus ut dui imperdiet semper. Fusce tincidunt purus eu ex vehicula finibus. Maecenas lobortis, mi volutpat facilisis commodo, tortor mi faucibus lacus, sed eleifend ipsum est sed nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam porttitor, elit nec consequat cursus, risus tortor pharetra odio, in pharetra urna arcu eget diam. Nulla id nunc luctus, consectetur justo in, fermentum nibh. Integer quis orci molestie, molestie libero vitae, dictum metus. Vestibulum quam lacus, posuere sit amet orci vel, rutrum tempus ipsum.