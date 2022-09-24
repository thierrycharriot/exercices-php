<?php

// Data sous forme objets

$articles = [
    1 => new Article(
        'Article 001',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus erat libero, nec finibus diam tincidunt ut. Nunc efficitur est non mauris efficitur, at molestie turpis imperdiet. In fermentum lacus in turpis consectetur iaculis. Etiam est quam, cursus vitae nulla fermentum, venenatis pretium velit. Cras gravida purus orci. Nunc pulvinar consequat egestas. In ligula est, mattis quis dui et, ultricies faucibus lacus. Sed quis tempor eros, ut auctor diam. ',
        'Auteur 001',
        '2022-01-01',
        'Categorie 001'
    ),
    2 => new Article(
        'Article 002',
        'Fusce viverra ullamcorper tristique. Fusce ac velit sagittis, convallis magna vel, interdum ipsum. Maecenas sed est viverra dui tempor tincidunt. Pellentesque mollis sit amet enim sit amet venenatis. Vestibulum orci metus, posuere non pharetra vitae, mattis ultricies ligula. Mauris dictum sagittis nunc non fermentum. Pellentesque et augue vel nibh consequat congue. Mauris hendrerit dolor eu convallis bibendum. Fusce tempus sapien arcu, a sagittis risus efficitur quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ',
        'Auteur 002',
        '2022-01-02',
        'Categorie 002'
    ),
    3 => new Article(
        'Article 003',
        'In molestie at lectus eu consequat. Suspendisse venenatis euismod nulla, at posuere velit egestas eu. In in tellus quis libero accumsan tempus. Nulla viverra elit sed dapibus viverra. Ut sit amet sodales justo. Quisque dictum nulla at fermentum malesuada. Etiam tincidunt hendrerit quam, in commodo nisi tincidunt eget. In sodales, nunc at condimentum hendrerit, nisi purus viverra mauris, eu finibus purus lorem sit amet nisl. Vestibulum fringilla auctor magna, at luctus dolor ornare fermentum. Vivamus leo risus, viverra in tincidunt vel, consectetur a magna. Integer tristique magna at ex fermentum, et commodo eros suscipit. Pellentesque tincidunt quis augue vitae feugiat. Duis nunc risus, ullamcorper eu ultricies a, vehicula vitae dui. Aliquam ante mauris, posuere at iaculis nec, vulputate sit amet tellus. Donec ipsum sapien, commodo in velit a, ullamcorper maximus nisi. ',
        'Auteur 003',
        '2022-01-03',
        'Categorie 003'
    ),
    4 => new Article(
        'Article 004',
        'Sed accumsan velit a condimentum rutrum. Nunc nec magna malesuada, fermentum urna non, facilisis nulla. Praesent sollicitudin aliquet dui, in mollis odio gravida vestibulum. Praesent vitae ultrices metus, quis maximus dolor. Cras eu purus convallis, interdum tortor at, iaculis justo. In vel magna sit amet erat aliquam posuere. Phasellus faucibus purus nec massa dignissim, a dapibus velit aliquet. ',
        'Auteur 001',
        '2022-01-04',
        'Categorie 004'
    ),
    5 => new Article(
        'Article 005',
        'Nunc sit amet dapibus urna. Cras ac fermentum lorem, non hendrerit elit. Phasellus gravida maximus diam. Mauris ultricies placerat volutpat. Nam congue elit non leo rhoncus eleifend. Vestibulum ut odio sit amet orci iaculis euismod. Cras a suscipit purus. Aenean turpis mi, vestibulum quis dapibus ac, facilisis egestas ligula. Sed dignissim sem tortor, nec maximus ante finibus sed. Cras convallis ut leo eget pharetra. Aenean molestie, ex vitae luctus placerat, felis sem ultrices est, ornare consequat nulla justo ut metus. ',
        'Auteur 002',
        '2022-01-05',
        'Categorie 005'
    ),
    6 => new Article(
        'Article 006',
        'Sed et enim pulvinar, eleifend enim ac, viverra enim. Sed ornare, ante id sodales ornare, lectus neque finibus lacus, at commodo nunc turpis quis ex. Nullam eleifend convallis nisi, nec ultricies libero auctor sed. Etiam felis turpis, malesuada sit amet diam ac, ultricies sollicitudin neque. Aenean ut congue justo, condimentum fringilla massa. Suspendisse scelerisque ac magna at congue. Vestibulum mattis dolor nec magna feugiat, in vestibulum ante tempus. In hac habitasse platea dictumst. Morbi quis risus est. Etiam mollis nulla at condimentum rhoncus. Suspendisse malesuada, sem quis ultricies condimentum, felis lorem lacinia velit, sed condimentum velit risus bibendum metus. Sed ut sem eu eros laoreet feugiat. Fusce ultricies dolor sed urna scelerisque egestas at sed velit. Quisque nulla ipsum, molestie et nisl ac, eleifend aliquam tortor. In in molestie augue. Proin sit amet ex eget mauris pharetra sodales quis et ante. ',
        'Auteur 003',
        '2022-01-06',
        'Categorie 006'
    ),

    7 => new Article(
        'Article 007',
        'Maecenas elementum, urna vitae laoreet lobortis, tortor nulla pellentesque turpis, ac rutrum massa dui quis mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dapibus pellentesque nisi a pharetra. Praesent imperdiet mauris ut eros tincidunt dictum. Etiam porta urna non placerat maximus. Mauris eu arcu eu tellus imperdiet vulputate. Phasellus tincidunt, dui eu molestie maximus, sapien dolor dignissim leo, sit amet dictum quam lectus sit amet nisi. Pellentesque rhoncus, libero ut scelerisque consectetur, lacus leo cursus libero, at porttitor velit risus ut turpis. ',
        'Auteur 001',
        '2022-01-07',
        'Categorie 001'
    ),
    8 => new Article(
        'Article 008',
        'Proin condimentum, tortor eget mattis tempus, ipsum nunc feugiat nisl, non ultrices purus augue sit amet mauris. Etiam consectetur, elit et commodo pulvinar, metus nisi pellentesque magna, eleifend tempus orci massa ac ex. Etiam molestie nec risus a molestie. Aliquam at elit rhoncus, pulvinar augue id, pellentesque mauris. Suspendisse augue velit, fringilla non cursus id, imperdiet varius diam. Aliquam consequat, arcu elementum dapibus tincidunt, tellus felis sodales turpis, ac scelerisque ex dui sed sem. Aenean ultrices nunc nisl, nec aliquet lectus tempus sit amet. Fusce elementum, erat quis viverra mattis, est nibh feugiat velit, sit amet pretium ante turpis in erat. Donec iaculis, enim a imperdiet vulputate, massa mauris elementum dui, quis efficitur lorem turpis sed nulla. ',
        'Auteur 002',
        '2022-01-08',
        'Categorie 002'
    ),
    9 => new Article(
        'Article 009',
        'Sed vitae elit eu nisi molestie imperdiet accumsan eleifend elit. Phasellus vitae lorem libero. In lectus enim, facilisis et ullamcorper aliquam, lacinia nec tellus. Donec aliquam, lectus ac dapibus laoreet, augue leo dapibus ligula, vulputate finibus ipsum leo nec sem. Nullam semper pharetra nisi, vel malesuada tortor malesuada ac. Ut sit amet arcu id tellus tincidunt ultricies vel non arcu. Suspendisse non feugiat lorem. ',
        'Auteur 003',
        '2022-01-09',
        'Categorie 003'
    ),
    10 => new Article(
        'Article 0010',
        'Suspendisse eu metus euismod, consequat lectus id, mattis nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis diam ut magna congue ultrices. Sed auctor scelerisque neque vitae semper. Ut augue urna, interdum non venenatis vel, volutpat eu justo. Duis fringilla justo ornare mi feugiat, id cursus nisl egestas. Curabitur at nibh pellentesque, fermentum nunc et, cursus sem. Vivamus sed mauris sollicitudin, dapibus nibh imperdiet, blandit velit. Praesent maximus, diam id posuere cursus, quam dui elementum augue, ut maximus metus nunc aliquet diam. ',
        'Auteur 001',
        '2022-01-10',
        'Categorie 004'
    ),
    11 => new Article(
        'Article 011',
        'Mauris sed elit quis sem dignissim mollis id ut leo. Ut volutpat ac elit eget malesuada. Nulla ut consectetur libero. Integer vulputate luctus ornare. Etiam fermentum sapien a erat consectetur dapibus. Curabitur ac velit at dolor consequat aliquet. Duis a sem aliquam ligula ultrices condimentum et vitae nisl. Nullam dignissim fringilla ligula, non eleifend risus efficitur in. Phasellus scelerisque leo sit amet dui elementum, eu cursus sapien elementum. Vestibulum laoreet mi eget malesuada sollicitudin. Duis nisi neque, pulvinar id eros rutrum, egestas malesuada nisi. Curabitur in ipsum congue, commodo nulla ut, faucibus est. Vivamus sollicitudin lacus vel nibh sollicitudin placerat. Cras lacinia convallis elit ac tristique. Etiam mollis, ipsum sit amet vehicula tincidunt, elit nulla pulvinar justo, eget vulputate nisi nulla congue purus. ',
        'Auteur 002',
        '2022-01-11',
        'Categorie 005'
    ),
    12 => new Article(
        'Article 012',
        'Praesent non maximus est. Fusce eget tristique odio. Etiam pharetra pretium odio at semper. Nam ac auctor tortor. Vivamus felis tellus, aliquam et porttitor ac, posuere at augue. Donec eleifend faucibus scelerisque. Nam scelerisque enim eu nibh faucibus semper. Nulla mollis mattis est, ut interdum enim porta suscipit. ',
        'Auteur 003',
        '2022-01-12',
        'Categorie 006'
    ),
    13 => new Article(
        'Article 013',
        'Aliquam tristique, leo ut suscipit volutpat, ex sapien sollicitudin massa, sed laoreet ante diam egestas elit. Nulla facilisi. Fusce eget sagittis quam. Sed a purus sit amet nulla porttitor tempor. Sed sodales orci eu orci tincidunt, rhoncus dapibus arcu condimentum. Nunc ornare interdum lobortis. Ut accumsan rhoncus nisl in placerat. Integer vestibulum lacinia ipsum, nec ornare leo lobortis tincidunt. Suspendisse id arcu purus. In nec metus ac enim venenatis imperdiet. Donec finibus metus at convallis sollicitudin. In sed purus quis risus suscipit tincidunt eu non enim. Pellentesque aliquet sapien in vulputate lacinia. Cras blandit felis lacinia, ultrices nulla sit amet, hendrerit augue. Aenean id quam vel odio interdum scelerisque. Sed fermentum et velit fermentum tempus. ',
        'Auteur 001',
        '2022-01-13',
        'Categorie 001'
    ),
    14 => new Article(
        'Article 014',
        'Mauris orci urna, venenatis sit amet tincidunt quis, posuere in nulla. Etiam dolor diam, interdum eget diam quis, sodales posuere lorem. Nulla scelerisque molestie interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec sodales faucibus sem, at convallis nulla efficitur non. Vestibulum ac convallis mi. Proin vitae malesuada urna. Proin augue augue, sodales quis scelerisque ac, varius at ante. Fusce sit amet nisi fringilla ex varius rhoncus. Vestibulum sit amet tincidunt libero, a faucibus magna. Praesent id ipsum lorem. Sed ligula leo, pharetra et magna et, faucibus sagittis sapien. Suspendisse viverra fringilla ante id iaculis. Curabitur volutpat ante a lacus rhoncus, eu sagittis nisi lobortis. Quisque a malesuada tellus, a convallis dui. ',
        'Auteur 002',
        '2022-01-14',
        'Categorie 002'
    ),
    15 => new Article(
        'Article 015',
        'Quisque auctor mi ultricies sem feugiat ultrices. Donec lacinia justo sit amet egestas scelerisque. Mauris tempor erat nibh. Phasellus vel volutpat sem, sit amet dignissim tellus. Duis justo arcu, malesuada at volutpat non, gravida at tortor. Proin vel venenatis ipsum. Maecenas rhoncus odio dolor. ',
        'Auteur 003',
        '2022-01-15',
        'Categorie 003'
    ),
    16 => new Article(
        'Article 016',
        'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer eget libero sollicitudin, varius massa a, egestas lorem. Vestibulum placerat sit amet elit ac elementum. Nullam at tristique lacus. Nunc magna tellus, lacinia at ipsum a, posuere vestibulum sapien. Phasellus porttitor in purus vel iaculis. Sed sed malesuada sem. Integer condimentum rhoncus cursus. In quis nibh facilisis, malesuada odio in, pretium turpis. ',
        'Auteur 001',
        '2022-01-16',
        'Categorie 004'
    ),
    17 => new Article(
        'Article 017',
        'Nulla vitae purus nulla. Integer ornare feugiat malesuada. Vestibulum sem massa, auctor eget felis non, ornare porta tellus. Proin auctor tincidunt justo, molestie feugiat lorem tempor sit amet. Mauris vel odio ac enim pellentesque condimentum. Aliquam erat volutpat. Aenean tincidunt sed nibh scelerisque eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur eu enim justo. Etiam efficitur massa ut orci laoreet, eu laoreet lorem ultricies. Morbi id consectetur lorem. Suspendisse finibus sem a ligula congue aliquet. Maecenas semper pretium risus, id accumsan nulla ornare at. ',
        'Auteur 002',
        '2022-01-17',
        'Categorie 005'
    ),
    18 => new Article(
        'Article 018',
        'Mauris nec ultricies mi. Sed libero eros, faucibus ut odio et, fringilla venenatis purus. Vestibulum porttitor ante tellus, vitae hendrerit risus scelerisque sit amet. Proin ullamcorper semper varius. Nam et justo magna. Nulla magna dolor, imperdiet et sodales cursus, semper nec neque. Proin rhoncus sem ipsum, a venenatis ante ornare quis. ',
        'Auteur 003',
        '2022-01-18',
        'Categorie 006'
    ),
];

$categories = [
    1 => new Category(
        'Categorie 001'
        ),
    2 => new Category(
        'Categorie 002'
    ),
    3 => new Category(
        'Categorie 003'
    ),
    4 => new Category(
        'Categorie 004'
    ),
    5 => new Category(
        'Categorie 005'
    ),
    6 => new Category(
        'Categorie 006'
    )
];

$authors = [
    1 => new Author(
        'Auteur 001'
    ),
    2 => new Author(
        'Auteur 002'
    ),
    3 => new Author(
        'Auteur 003'
    ),
    4 => new Author(
        'Auteur 004'
    ),
    5 => new Author(
        'Auteur 005'
    ),
    6 => new Author(
        'Auteur 006'
    )
];
