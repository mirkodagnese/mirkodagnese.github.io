<?php

include 'product-object.php';
include 'product-image-object.php';
include 'product-image-layout-enum.php';

$GLOBALS['data'] = array(
    "brainston" => new Product("BRAINSTON",
        "Logo Design & UI/UX App",
        "Creation of a brand and related UI/UX design for crowdfunding platform using the “scale-up” technique, starting therefore from the design of the mobile version. This brand will only deal with crowdfunding in the design field, in any case embracing different sectors. The concept of the logo was born from the need to recognize one's visual presence in the market with a simple and precise brand.",
        "img/brainston/brainston.jpg",
        "#FD3C1DA6",
        array(
            new ProductImage("img/brainston/Brainston-01.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/brainston/Brainston-02.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
                       [],
            "The naming \"Brainston\" comes from the set of two English words, respectively <b>brainstorm</b>, referring to future users who will have brilliant ideas to realize by proposing them on the site in search of financiers, and <b>on</b>, to give an idea of \"lit\" as a symbol for put your creativity to work. On the left we find the pictogram representing the brain in the shape of the letter B: that is, the first letter of the naming. Immediately after the logo and payoff; the latter with the text \"express your creativity\" invites all those who have a project they want to carry out to put it into practice, having the opportunity to find collaborators interested in investing, turning their dream into reality."),
            new ProductImage("img/brainston/Brainston-03.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/brainston/Brainston-04.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
                [],
            "The buffer area indicates the minimum essential space between the logo and other elements. \nThe area in question is exactly equivalent to 1/3x."),
            new ProductImage("img/brainston/Brainston-05.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/brainston/Brainston-06.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
            [],
            "The logo maintains excellent readability in all dimensions, but it is advisable not to reduce it below 5 cm in height."),
            new ProductImage("img/brainston/Brainston-07.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
            [],
            "The following icons represented above were used for the development of the website."),
            new ProductImage("img/brainston/Brainston-08.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/brainston/Brainston-09.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
            [],
            "Flowchart has been realized through the use of <a href=\"https://www.miro.com\" target=\"_blank\">www.miro.com</a>"),
            new ProductImage("img/brainston/Brainston-10.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/brainston/Brainston-11.jpg",
                ProductImageLayout::FULLSCREEN),
        )
    ),
    "kauha" => new Product("KAUHA",
        "Chocolate Label",
        "The Maya were the first cocoa plant growers on the Pacific coast of Guatemala. The seeds were so valuable to the Indians that they were used as coins. Cocoa even has symbolic and religious meanings. Chocolate was called by the Maya “kakaw uhanal”, or “food of the Gods”, where the name of this new brand, KAUHA, derives.",
        "img/kauha/kauha.jpg",
        "#6F020FA6",
        array(
            new ProductImage("img/kauha/kauha-01.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/kauha/kauha-02.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
            [],
            "In the \"KAUHA\" logo we can find the acronym between the two words <b>KA</b>kaw and <b>UHA</b>nal, in such a way as to standardize them in a single word, making it easy to pronounce and attractive for a global market."),
            new ProductImage("img/kauha/kauha-03.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
            [],
            "As for the choice of paper, Kraft is considered, pleasant to the touch and fascinating to the eye, useful for capturing the consumer's attention."),
            new ProductImage("img/kauha/kauha-04.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/kauha/kauha-05.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/kauha/kauha-06.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/kauha/kauha-07.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/kauha/kauha-08.jpg", "img/kauha/kauha-09.jpg"],
            "Kraft paper packaging that collects the 5 variants of chocolates. Equipped with a transparent PVC window for viewing the product, keeping the box stackable. The underlying closure of the packaging is built with the dovetail joint."),
            new ProductImage("img/kauha/kauha-10.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
            [],
            "The following photos were taken at the \"GG Studio 8\" photo studio. <br> Website: <a href=\"https://ggstudiodesign.com/\" target=\"_blank\"> ggstudiodesign. com </a>."),
            new ProductImage("img/kauha/kauha-11.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/kauha/kauha-12.jpg"]),
            new ProductImage("img/kauha/kauha-13.jpg",
                ProductImageLayout::FULLSCREEN)
        )
    ),
    "various" => new Product("VARIOUS",
        "Post Design Social Media",
        "Several advs have been created for the main social platforms such as Facebok and Instagram.\nIn the following slides there are images relating to customers such as: E. Marinella, Bisi, Bi-Lareral, Panamar, Jazzy Bar, R-evolurion, Club Sorrisi and ExBase.",
        "img/various-social/various-social.jpg",
        "#933B98A6",
        array(
            new ProductImage("img/various-social/various-social.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/various-social/social-01.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
            [],
            "Social Networks have the ability to guide and influence the possible buyers and consumers of a company. Good social management guarantees excellent business opportunities for any sector and activity. A web marketing strategy is now essential to achieve the objectives that each company sets itself and the target of people to whom it is addressed."),
            new ProductImage("img/various-social/social-02.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/various-social/social-03.jpg"]
            ),
            new ProductImage("img/various-social/social-04.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::DESCRIPTION_ONLY,
            [],
            "\"If you add a touch of humanity to your social media marketing, you will get better results\"."),
            new ProductImage("img/various-social/social-05.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/various-social/social-06.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/various-social/social-07.jpg",
                ProductImageLayout::FULLSCREEN),
        )
    ),
    "aside" => new Product("ASIDE",
        "Magazine Design",
        "The development of a magazine and respective layout for printing.\nThe magazine \"Aside\" deals with topics related to the world of graphics.",
        "img/aside/aside.jpg",
        "#FCBA20A6",
        array(
            new ProductImage("img/aside/aside-01.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            array("img/aside/aside-02.jpg", "img/aside/aside-03.jpg"),
            "Preview of the cover and some pages from the magazine \"Aside\". The following magazine has a total of 64 pages."),
            new ProductImage("img/aside/aside-03.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/aside/aside-04.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/aside/aside-05.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            array("img/aside/aside-06.jpg")),
            new ProductImage("img/aside/aside-07.jpg",
                ProductImageLayout::RIGHT_DESCRIPTION,
            [],
            "The magazine is a personal project."),
        )
    ),
    "heidrunn" => new Product("HEIDRUNN",
        "Beer Label Design",
        "The naming of this brand is the result of the historical connection between the Norse warriors and their invasion of Scotland. The name \"Heidrunn\" comes from a Valhalla goat whose udders flow rivers of beer. In this project, the following were created: logo, standard label plus limited edition, website (desktop and mobile) and ADV.",
        "img/heidrunn/heidrunn.jpg",
        "#043673A6",
        array(
            new ProductImage("img/heidrunn/heidrunn-01.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-02.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
                [],
            "The story of this new beer stems from the idea of three Italian brothers, moved to Scotland, who decide to invest and produce craft beer. The sale is foreseen only at authorized breweries and premises, therefore total distribution to discount and market is denied."),
            new ProductImage("img/heidrunn/heidrunn-03.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-04.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-05.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-06.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
            [],
            "Heidrunn will launch three types of beers on the market: lager, scotch ale* and extra. The main label will respectively have a size of 9x8 cm, while the back will be 5,8x8 cm.\n* The word \"ale\" comes from Scotland, of an intense amber color with mahogany reflections."),
            new ProductImage("img/heidrunn/heidrunn-07.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/heidrunn/heidrunn-08.jpg", "img/heidrunn/heidrunn-09.jpg"]),
            new ProductImage("img/heidrunn/heidrunn-10.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-11.jpg",
                ProductImageLayout::BOTTOM_DESCRIPTION,
            [],
            "Creation of a Limited Edition with an \"oak aged lager\" flavor that can only be sold online. Three different color variants are available: SILVER, GOLD and ROSE GOLD."),
            new ProductImage("img/heidrunn/heidrunn-12.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-13.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-14.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/heidrunn/heidrunn-15.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/heidrunn/heidrunn-16.jpg", "img/heidrunn/heidrunn-17.jpg"])
        )
    ),
    "revoison" => new Product("RÉVOISON",
        "Logo Design & Branding",
        "The naming of this elegant logo is given by the union of two French words: precisely \"rèvolution\" which indicates both the historic French revolution where urban development, derived from internal migrations, the culture of design and politics began to deal with of the \"housing question\" as a social theme of enormous importance, and revolution understood as a change (distortion) of a place.\nOn the other hand, the word \"maison\", that is home, indicates the goal of interior design: to modernize a home or, for example, a business or a work environment that we still consider our place of belonging.",
        "img/revoison/revoison.jpg",
        "#1E2426A6",
        array(
            new ProductImage("img/revoison/revoison-01.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-02.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-03.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/revoison/revoison-04.jpg", "img/revoison/revoison-05.jpg"],
            "As for the relationship of the size of the logo, the elimination of the pay-off is essential for a correct display of less than 3 cm."),
            new ProductImage("img/revoison/revoison-06.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-07.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("",
                ProductImageLayout::TWO_COLUMNS,
            ["img/revoison/revoison-08.jpg", "img/revoison/revoison-09.jpg"]),
            new ProductImage("img/revoison/revoison-10.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-11.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-12.jpg",
                ProductImageLayout::FULLSCREEN),
            new ProductImage("img/revoison/revoison-13.jpg",
                ProductImageLayout::FULLSCREEN),
        )
    ),
);
