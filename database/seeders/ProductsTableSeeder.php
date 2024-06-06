<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'MG 1/100 Strike Freedom Gundam',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY! This item is a posable, Master-Grade injection-plastic kit of an item from the Gundam universe. Strike Freedom Gundam, arguably the most popular mobile suit from the Gundam Seed Destiny anime series, finally gets the Master Grade treatment! This MG kit of Strike Freedom Gundam comes with the same fantastic detail, high quality, and super posability that MG builders would come to expect from Bandai. Strike Freedom Gundam comes armed with its trademark weaponry including the high energy beam rifles, Super Lacerta beam sabers, beam shield, Xiphias rail guns, and its most distinct and powerful weapon of all, the Super Dragoon mobile weapon wings that can extend and detach from the main wing frames. As usual, stickers and custom decal markings are provided along with a custom display base. Item Size/Weight: 39.5 x 31.3 x 11.3 cm / 923g',
                'image' => 'https://s6.imgcdn.dev/3TvFC.jpg',
                'price' => 998000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'MG 1/100 Gundam Barbatos Bandai',
                'description' => 'This is a posable, Master-Grade injection-plastic kit of an item from the Gundam universe. From "Mobile Suit Gundam: Iron Blooded Orphans," arrives the fourth form of the main Gundam, Barbatos, as an MG! The internal mechanisms such as the Gundam from and Ahab Reactors, have been thoroughly recreated. Features excellent color separation, improved dynamic movement gimmicks, and plentiful option parts. Barbatos\' fourth form colors have been replicated with precision, and the internal parts such as the Gundam frame have been carefully crafted to match their appearance in the series. The cylinders in the frame employ silver plating for extra detail, and the chest features a gimmick to allow rotation of the Ahab Reactors for the first time in an MG. The inner frame, cylinders, and armor are linked by a moveable axis in the upper body to improve posing ability. Barbatos\' knees also move in conjunction with their cylinders, expanding range of motion and offering a natural look when standing. Left to right movement of the waist has been articulated to allow for distinct down-facing posing, too. In addition to the wealth of possibilities in the kit itself, the weapon parts also feature satisfying gimmicks, such as a sliding and folding gimmick on the glide gun.',
                'image' => 'https://s6.imgcdn.dev/3TfJV.png',
                'price' => 898000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'HG 1/144 HGUC MSZ-006 Zeta Z Gundam Gunpla Evolution Project',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY !! This item is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. Celebrating the 40th anniversary of Gunpla, Bandai brings us a new lineup--the Gunpla Evolution Project! The first entry in this new series is the Zeta Gundam! It features increased flexibility for superior posability, and accurate proportions. Parts can be switched to transform it into the Wave Rider, too. In addition, it\'s armed with the Hyper Mega Launcher, a beam saber, and more. Order yours today! Package Size/Weight: 30.0 x 19.0 x 8.0 cm / 420g',
                'image' => 'https://s6.imgcdn.dev/3Tdvo.jpg',
                'price' => 365000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'FM 1/100 Full Mechanics XVX-016 Gundam Aerial Bandai Namco',
                'description' => 'This is a posable, injection-plastic kit of a character or mobile suit from the Gundam universe. Gundam Aerial from "Mobile Suit Gundam: The Witch from Mercury" joins the 1/100 "FULL MECHANICS" model kit lineup from Bandai! Its body features a sense of layered structure, and the shell unit, which was not recreated in the HG version of this kit, is made with three-dimensional unevenness, mechanical molding, and plated parts to create an illusion of light emission! The layered structure coupled with the clear exterior gives this kit a gorgeous appearance! The legs feature slide joints, where the knee and thigh parts can be moved to follow the movement of the knee joint; the toe parts also have a split structure to reproduce natural ground contact. The shield can be divided into 11 blocks and deployed as Gambit. It can be connected to various parts of the Gundam, and if you use the Witch of Mercury Weapon Display Base (sold separately), you can display the Gundam Aerial with Gambit deployed! Order this stunning new kit for your own collection today! [Includes]: Hand parts (x1 set) Beam saber (x2) Beam rifle Shield Effect parts for beam rifle Joint parts (x1 set) Stickers for markings',
                'image' => 'https://s6.imgcdn.dev/3T3FO.jpg',
                'price' => 998000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => '1/144 RG Nu Gundam RX-93 v Bandai',
                'description' => 'This is a posable, Real-Grade injection-plastic kit of an item from the Gundam universe. Amuro Ray\'s NU Gundam gets an RG kit release from Bandai! Its distinctive colors are carefully reproduced, including three shades of light gray to increase the visual depth. The shoulder and abdomen joints are fully flexible to give it increased posability, and the shoulder armor can also flex with more dynamic posing. The leg armor can slide with the movement of each joint, too. It\'s fully armed with its beam rifle, hyper bazooka, missiles and more -- order it today! [Includes]: Beam rifle Fin funnel (x6) New hyper bazooka Shield (beam cannon) Beam saber (backpack & arm) (x2 -- 1 each) Missiles (1 set) Item Size/Weight: 39.0cm x 31.0cm x 7.0cm / 720g',
                'image' => 'https://s6.imgcdn.dev/3TbCn.png',
                'price' => 755000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'HG 1/144 HGGBM Shin Burning Gundam Bandai Namco',
                'description' => 'This is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. The Shin Burning Gundam from the upcoming "Gundam Build Series" 10th anniversary video "Gundam Build Metaverse" gets a new High Grade (HG) model kit from Bandai! It comes with various effect parts, including cloak effects based on the Master Gundam. A polarized resin has been used for the clear parts, giving them a unique color-changing effect when viewed from different angles. This mighty mech comes with its sword, scabbard, and three sets of interchangeable hands. Order it for your own collection today! [Includes]: Long sword Sword effect part Punch effect part Kick effect part Cloak effect parts Interchangeable hands (left and right, x3 each) Stickers',
                'image' => 'https://s6.imgcdn.dev/3Te0g.jpg',
                'price' => 498000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'IBO 1/144 HG Gundam Bael',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY !! This item is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. Gundam Bael from "Mobile Suit Gundam: Iron-Blooded Orphans" joins Bandai\'s High Grade kit lineup! The winglike units on its back will be posable after assembly, and it\'s armed with two swords. Package Size/Weight: 30.0 x 19.0 x 6.8 cm / 270g',
                'image' => 'https://s6.imgcdn.dev/3Tm3v.jpg',
                'price' => 375000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100),
            ],
            [
                'name' => 'RG Gundam Exia',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY!! This item is a posable, Real-Grade injection-plastic kit of an item from the Gundam universe. At last, a Real Grade kit of Gundam Exia! Fully posable after assembly, it comes with the GN Sword, two GN Beam Sabers, two GN Beam Daggers, a GN Short Blade and GN Long Blade. Parts molded in multiple colors, so painting isn\'t really necessary (although it\'ll look extra amazing with some paint added). Kit includes decals.',
                'image' => 'https://s6.imgcdn.dev/3THTq.jpg',
                'price' => 498.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'HGBF 1/144 Kamiki Burning Gundam',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY!! This item is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. From "Gundam Build Fighters Try," it\'s the mighty Kamiki Burning Gundam! It\'s molded in vivid red, white, black, dark blue, clear blue, yellow and clear orange plastic, so painting is not necessary (although painting will improve the appearance of just about any kit). Comes with flame effect parts, and three extra sets of hands; foil stickers are provided for the details.',
                'image' => 'https://s6.imgcdn.dev/3TXRB.jpg',
                'price' => 455.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'HG 1/144 HGCE DESTINY GUNDAM ZGMF-X42S Seed BANDAI',
                'description' => 'This is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. This kit of Shinn Asuka\'s Destiny Gundam from "Gundam Seed" is an entirely new mold! It features its weapons and plenty of effect parts cast in clear material for a striking appearance (including for its Wings of Light), and will be highly posable upon completion. Parts are molded in color so painting isn\'t needed, and it snaps together too; foil stickers are included for the markings. Order it now!',
                'image' => 'https://s6.imgcdn.dev/3T8nL.png',
                'price' => 498.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => '1/144 HG Gundam Dynames BANDAI',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY!! This item is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. Here\'s an excellent snap-fit assembly kit of Lockon Stratos\' personal Mobile Suit, Gundam Dynames! Molded in color, it will be articulated with plenty of polycap joints upon completion and will feature foldable GN shields to the front for front guard mode. Its GN sniper rifle can be set up with tripod support and can also be stored on its right shoulder armor. The yellow antenna on its head can be slid down to reveal a gun camera for precision sniping. A sheet of foil stickers is included for detail. Not a drop of glue or paint required, although painting it would add a more realistic appearance.',
                'image' => 'https://s6.imgcdn.dev/3TJxa.jpg',
                'price' => 298.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'HG 1/144 HGUC RX-78-2 Gundam Revive',
                'description' => 'BANDAI ORIGINAL - NEW MIB READY! This item is a posable, high-grade or better injection-plastic kit of an item from the Gundam universe. From July of 1980 through March of last year, Bandai has sold over 434 million Gunpla kits. As part of the celebrations, a new HGUC 1/144 RX-78-2 Gundam, created using the latest in Gunpla engineering, will be released for the lineup\'s 35th anniversary in July. The kit, the first revision in 14 years of the iconic 1/144 RX-78-2 Gundam, embodies the anniversary theme "Revive" with all-new molds. Ideal proportions, an evolution in mobility, and an easier build than ever combine to show new frontiers for Gunpla.',
                'image' => 'https://s6.imgcdn.dev/3ToHw.jpg',
                'price' => 255.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'Gundam Universe XXXG-01D Gundam Deathscythe GU-06 Bandai',
                'description' => 'This is a posable action figure of an item from the Gundam universe. Bandai brings us a new action figure lineup to celebrate the 40th anniversary of "Mobile Suit Gundam"! Gundam Universe figures are made to fit into the 6-inch world-standard figure size, and feature kinetic styling to emphasize motion and posability, durable construction, and a sharply detailed silhouette that looks great from any angle! The legendary Gundam Deathscythe from "Gundam Wing" is armed with its buster shield and effect parts for it, as well as its iconic laser scythe; it also has a set of interchangeable hands, as well as a joint for the Tamashii Stage (sold separately). Order yours today!',
                'image' => 'https://s6.imgcdn.dev/3UDCt.png',
                'price' => 398.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'MG 1/100 Gundam Astray Red Frame Kai Bandai',
                'description' => 'BANDAI ORIGINAL -NEW MIB READY!! This item is a posable, Master-Grade injection-plastic kit of an item from the Gundam universe. Like the Blue Frame, Lowe Guele\'s Astray Red Frame Kai boasts amazing articulation through the generous use of poly-caps. Once assembled, this MG will be able to stand in a variety of poses wielding its weapons. Its backpack can easily take on a several forms with some simple changes. As \'Tactical ArmsIIL\' it can change between Flight Form, Delta Form, and V form. Its Sword Form changes to Work Form, whereas Arrow Form takes the shape of a giant bow. The Beam Torch can be held in the mech\'s hand or attached to the Arrow Form. The MG Astray also comes with its two signature katana; Gerbera Straight forged by Kiku Ichimonji and Tiger Pierce by Kotetsu. The two katana even feature signatures carved into the handles!! Two 1/100 scale figures of Lowe Guele, one sitting and one standing, are also included plus dry transfer decals and stickers for markings. Bandai originally released this kit in February 2010 and, as part of the 30th anniversary of Gunpla that year, included a bonus runner of clear parts. This release does not include the bonus clear parts runner.',
                'image' => 'https://s6.imgcdn.dev/3UY7T.jpg',
                'price' => 898.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'NG 1/100 Chaos Gundam Bandai Namco',
                'description' => 'This is an injection-plastic kit of a science-fiction/anime item. Kamen Rider Gaim Orange Arms from "Kamen Rider Gaim" now joins the "Figure-rise Standard" figure-kit lineup from Bandai! His eyes are carefully made with layers to give them a realistic shine; the distinctive Orange Arms armor is made with plating for an incredible gleaming appearance! In addition to the Sengoku Driver, the surface details of the Pine Lock Seed and Strawberry Lock Seed are accurately reproduced. You can attach armor inspired by the transformation sequence too! The Oororomaru and Musou Saber can reproduce their Naginata Mode without parts replacement by attaching the Orange Lock Seed and connecting them; the Musou Saber can also be attached to a holster. A variety of hand parts and a Figure-rise Effect display base are also included. Order this mighty hero for your own collection today!',
                'image' => 'https://s6.imgcdn.dev/3UhLD.jpg',
                'price' => 498.000,
                'discount' => rand(20, 80),
                'category' => 'Gundam',
                'preorder' => false,
                'stock' => rand(1, 100)
            ],
            [
                'name' => 'Tamiya 95598 Neo VQS Advanced Pack',
                'description' => 'Special version with many selected parts. This is a special kit which features stylish body and a lively drive with useful tune-up parts. The body is molded in smoke-color, and VZ Chassis is coordinated with black and clear yellow. Dedicated metallic stickers are also included. A host of parts for a highly tuned car include a light-dash motor, FRP front wide plate and rear brake stay for setup of brakes and stabilizer balls. Mass dampers and super hard and small-diameter low-profile tires help improve your chances of finishing the race. Also, this model features hollow propeller shaft, high speed EX counter gears, and tough carbon-reinforced plastic gears. This model is highly recommended for racers who want to power up the NEO-VQS.',
                'image' => 'https://s6.imgcdn.dev/3TPqt.jpg',
                'price' => 395000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya Mini 4WD Razorback (FM-A Chassis) - 18713',
                'description' => 'This Mini 4WD car’s stunning body was chosen in a 2018 Mini 4WD design competition held in Japan! The Razorback takes its name and inspiration from the wild pigs often colloquially called due to the mohawk on their back. The model is based upon the front motor FM-A chassis, which is ideally suited to a number of circuit types, particularly those with plenty of ups and downs.',
                'image' => 'https://s6.imgcdn.dev/3Tl0D.png',
                'price' => 287000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 95508 Neo Tridagger ZMC Carbon Special Original',
                'description' => 'Tamiya 95508 Neo-Tridagger ZMC Carbon Sp. (Super II Chassis). Mini 4WD model assembly kit. The Super-II chassis and battery cover are molded Black carbon fiber-reinforced nylon resin. The body comes molded in Black carbon fiber-reinforced nylon resin. Includes metallic stickers. Black 3-spoke carbon fiber-reinforced resin wheels are paired with tread patterned red tires. Type 130 motor is included. The model features 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3Tzd9.png',
                'price' => 480000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya Aero Avante Asia Challenge 2024 Special - 95655',
                'description' => 'To commemorate the Tamiya Mini 4WD Asia Challenge 2024 (TMAC) which is planned in Korea in early summer 2024, Tamiya welcomes this limited-edition kit. It is based on our popular Aero Avante (AR) with new color body (white) and AR chassis (blue), newly designed stickers and new packaging.',
                'image' => 'https://s6.imgcdn.dev/3T1jy.jpg',
                'price' => 195000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya Cross Spear 01 Vz Chassis',
                'description' => 'This Mini 4WD model comes with a body that is the brainchild of Japanese “hyper-designer” Takayuki Yamazaki, based upon the forefront VZ chassis! You may remember his name from other Mini 4WD bodies he has designed, such as the DCR-01 (Item 18646), DCR-02 (Item 18650) and Ray Spear (Item 18099).',
                'image' => 'https://s6.imgcdn.dev/3T0P8.jpg',
                'price' => 180000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 95164 Mach Frame Silver Metallic Body (FMA Chassis)',
                'description' => 'It comes equipped with a low-friction front skid bar, while the chassis underside allows easy access to the motor and quick setup changes. Aircraft-inspired aero side stays allow attachment of a range of Grade-Up parts. The chassis is molded in durable metallic gray ABS, with low friction A parts such as underpanel in black. White A-spoke wheels are combined with super hard low-profile tires, and the model includes a motor and 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3T792.jpg',
                'price' => 265000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 92445 Festa Jaune TKC Korea Special (MA Chassis) Original',
                'description' => 'It has six individual low-friction rollers, a rear skid bar and other speedy features developed thanks to years of design experience. The single-piece monocoque frame also guarantees that assembling and keeping the car well-maintained is a task that can be performed by beginners and veteran racers alike. It features a 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3TBJi.jpg',
                'price' => 320000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 18711 Trairong (FM-A Chassis)',
                'description' => 'Mini 4WD model assembly kit. The FM-A Chassis is molded in Black ABS, with A Parts in Black low-friction POM. A-spoke wheels have smoke color plated finish and are paired with Black low-profile tires. Type 130 motor is included. The model features a 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3TSkH.jpg',
                'price' => 150000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 95571 Exflowly Polycarbonate Body Special Purple (MS Chassis)',
                'description' => 'This is a plastic model assembly kit of a high-performance racer equipped with a double shaft motor. XFlory Polycarbonate Body Special (Purple) is a special upgraded version of the XFlowry, which has an attractive low-slung racing car style. The clear body is made of durable, unbreakable, and lightweight polycarbonate, and is mounted on an MS chassis with a 3-part structure that offers excellent expandability.The chic purple and black chassis color coordination that is visible through the body is also a highlight.',
                'image' => 'https://s6.imgcdn.dev/3TrvS.jpg',
                'price' => 331000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 95165 Ignicion Blue Metallic (MA Chassis)',
                'description' => 'The MA (Midship AERO) Chassis has its motor in the center, and features a design which focuses upon achieving outstanding aerodynamic performance. It has six individual low-friction rollers, a rear skid bar and other speedy features developed thanks to years of design experience. The single-piece monocoque frame also guarantees that assembling and keeping the car well-maintained is a task that can be performed by beginners and veteran racers alike. It features a 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3T24e.jpg',
                'price' => 304000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],

            [
                'name' => 'Tamiya 95466 Mantaray Mk.II Black Special (MS Chassis)',
                'description' => 'It is a plastic model assembly kit of a four-wheel drive racer with high performance and fun racing. Mantaray Mk.II Black Special is a special version of Mantaray Mk.II with a translucent smoked ABS resin body and blue chassis. A cool impression is produced by black-and-blue finish. Metallic stickers to create markings are also included. Black fin-type wheels are matched with small-diameter slick tires to enhance running performance. It includes a double-shaft motor that transmits power efficiently and comes with a 3.5:1 speed gear.',
                'image' => 'https://s6.imgcdn.dev/3T6Yh.jpg',
                'price' => 259000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],
            [
                'name' => 'Tamiya 95375 Avante Mk.III Azure (AR Chassis)',
                'description' => 'This assembly kit creates a special version of the Avante Mk.III, the successor to the famed Mini 4WD Avante. Its lightweight polycarbonate body comes already painted in azure blue, and is combined with a similarly azure colored AR chassis. Metallic type stickers are included to decorate the body. Gun metal color A-spoke wheels are paired with white super hard low-profile tires, while the model uses a 3.5:1 gear ratio.',
                'image' => 'https://s6.imgcdn.dev/3TK7P.jpg',
                'price' => 309000,
                'discount' => rand(20, 80),
                'category' => 'Tamiya',
                'preorder' => false,
                'stock' => rand(0, 100)
            ],
        ];

        // Add more sample data as needed

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}