<?php

namespace OverwatchHeroBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use OverwatchHeroBundle\Entity\Hero;
use UserBundle\Entity\User;
use UserBundle\Entity\Review;
use CategoryBundle\Entity\Category;


class HeroFixturesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('Hero:fixtures')->setDescription('Chargement du jeu d\'essai');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $passwordEncoder = $this->getContainer()->get('security.password_encoder');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');


        $category1 = new Category();
        $category1->setCategoryName("Attaquants");
        
        $category2 = new Category();
        $category2->setCategoryName("Defenseurs");
       
        $category3 = new Category();
        $category3->setCategoryName("Soutiens");
        
        $category4 = new Category();
        $category4->setCategoryName("Tanks");

        $categories = [$category1,$category2,$category3,$category4];

       foreach ($categories as $currentCategory) {
           $em->persist($currentCategory);
       }

        $hero1=new Hero();
        $hero1->setName("Hanzo");
        $hero1->setCategory($category2);
        $hero1->setDescription("Les flèches polyvalentes de Hanzo peuvent révéler ses ennemis, ou se fragmenter pour toucher plusieurs cibles. Il peut également grimper aux murs pour tirer depuis une position élevée, et invoquer un gigantesque esprit dragon.");

        $hero2=new Hero();
        $hero2->setName("Bastion");
        $hero2->setCategory($category2);
        $hero2->setDescription("Avec son protocole de réparation et sa capacité à alterner entre configuration d’assaut stationnaire, de reconnaissance ou de tank, les chances de victoire de Bastion sont très élevées.");

        $hero3=new Hero();
        $hero3->setName("Soldat 76");
        $hero3->setCategory($category1);
        $hero3->setDescription("Équipé d’armes ultra avancées, dont un fusil à impulsions expérimental également capable de tirer plusieurs roquettes LX à la fois, soldat : 76 est un guerrier rapide et expérimenté qui sait soutenir ses alliés.");

        $hero4=new Hero();
        $hero4->setName("Reinhardt");
        $hero4->setCategory($category4);
        $hero4->setDescription("Protégé par une armure motorisée, armé d’un marteau et propulsé par un réacteur, Reinhardt charge ses ennemis et défend ses alliés à l’aide d’une large écran énergétique.");
        
        $hero5=new Hero();
        $hero5->setName("Genji");
        $hero5->setCategory($category1);
        $hero5->setDescription("Genji lance des shurikens précis et mortels sur ses cibles, et utilise son katana à la pointe de la technologie pour dévier les projectiles ou exécuter une Frappe du vent qui blesse sérieusement ses ennemis.");
        
        $hero6=new Hero();
        $hero6->setName("Doom Fist");
        $hero6->setCategory($category1);
        $hero6->setDescription("Les améliorations cybernétiques de Doomfist font de lui un combattant de première ligne à la fois puissant et très mobile. Capable d’infliger des dégâts à distance avec son calibre prosthétique, il peut également frapper le sol pour projeter ses ennemis dans les airs, ou charger dans la mêlée grâce à son direct d’enfer. Face à un groupe compact, Doomfist bondit hors de vue de ses adversaires pour mieux s’écraser au sol dans une spectaculaire frappe météore.");

        $hero7=new Hero();
        $hero7->setName("Ana");
        $hero7->setCategory($category3);
        $hero7->setDescription("L’arsenal polyvalent d’Ana lui permet de soigner et de renforcer ses alliés à distance, tandis que son fusil biotique, ses fléchettes tranquillisantes et ses grenades biotiques neutralisent quiconque menace ses camarades.");

        $hero8=new Hero();
        $hero8->setName("Lucio");
        $hero8->setCategory($category3);
        $hero8->setDescription("Sur le champ de bataille, l’ampli high-tech de Lúcio envoie des projectiles soniques sur ses ennemis et les repousse avec des ondes de choc. Ses chansons soignent ses alliés ou augmentent leur vitesse de déplacement, et il peut changer de morceau à la volée.");

        $hero9=new Hero();
        $hero9->setName("Ange");
        $hero9->setCategory($category3);
        $hero9->setDescription("L’armure Valkyrie d’Ange lui permet de veiller sur ses coéquipiers tel un ange gardien. Grâce aux rayons de son Caducée, elle peut les soigner, les ressusciter ou les renforcer.");


        $hero10=new Hero();
        $hero10->setName("Mccree");
        $hero10->setCategory($category1);
        $hero10->setDescription("Armé de son Pacificateur, McCree abat ses cibles avec une précision redoutable et se met à couvert plus vite que son ombre.");

        $hero11=new Hero();
        $hero11->setName("Pharah");
        $hero11->setCategory($category1);
        $hero11->setDescription("Fendant les airs dans son armure de combat et armée d’un lance-roquettes tirant des projectiles incapacitants ou dévastateurs, Pharah jouera assurément un rôle crucial dans chaque bataille.");

        $hero12=new Hero();
        $hero12->setName("Faucheur");
        $hero12->setCategory($category1);
        $hero12->setDescription("Avec Pompes funèbres, sa capacité spectrale lui permettant d’éviter tout dégât et son pouvoir à se déplacer dans les ombres, Faucheur est l’un des êtres les plus redoutables de la planète.");


        $hero14=new Hero();
        $hero14->setName("Sombra");
        $hero14->setCategory($category1);
        $hero14->setDescription("Ses talents de camouflage et ses attaques affaiblissantes font de Sombra une experte en infiltration. En piratant ses ennemis pour les déstabiliser, elle en fait des cibles faciles à éliminer tandis que son IEM peut conférer un avantage de poids contre des groupes entiers d’adversaires. Les capacités de transduction et de camouflage de Sombra en font une cible quasi insaisissable.");
        
        $hero15=new Hero();
        $hero15->setName("Mei");
        $hero15->setCategory($category2);
        $hero15->setDescription("Mei manipule le climat pour ralentir ses ennemis et protéger les endroits importants. Son canon endothermique projette de redoutables pointes de glace ou libère un flux de givre, et elle peut entrer en cryostase pour survivre aux contre-attaques, ou bloquer le chemin de l’équipe adverse avec un mur de glace.");
        
        $hero16=new Hero();
        $hero16->setName("Torbjörn");
        $hero16->setCategory($category2);
        $hero16->setDescription("L’incroyable arsenal de Torbjörn comprend un pistolet à rivets et un marteau, ainsi qu’une forge personnelle servant à construire ou améliorer des tourelles et à distribuer des modules d’armure.");
        
        $hero17=new Hero();
        $hero17->setName("Fatale");
        $hero17->setCategory($category2);
        $hero17->setDescription("Fatale emploie tous les moyens à sa disposition pour éliminer ses cibles : des mines qui diffusent un gaz toxique, une visière qui confère une vision infrarouge à son équipe et un puissant fusil à lunette qui peut tirer en mode automatique.");

        $hero18=new Hero();
        $hero18->setName("D.Va");
        $hero18->setCategory($category4);
        $hero18->setDescription("Le méca de D.Va est aussi agile que puissant : ses fusio-canons jumelés tirent en continu à courte portée, et elle peut activer ses turboréacteurs pour bondir par-dessus ennemis et obstacles, ou abattre les projectiles en plein air avec sa matrice défensive.");
       
        $hero19=new Hero();
        $hero19->setName("Orisa");
        $hero19->setCategory($category4);
        $hero19->setDescription("Orisa est le pilier central de son équipe, qu’elle défend en première ligne grâce à son écran protecteur. Elle peut attaquer à distance, renforcer ses propres défenses, projeter des charges à gravitons qui ralentissent et déplacent ses adversaires, ou encore déployer un surchargeur qui augmente les dégâts infligés par plusieurs de ses alliés.");

        $hero20=new Hero();
        $hero20->setName("Chopper");
        $hero20->setCategory($category4);
        $hero20->setDescription("Avec son emblématique traquelard, Chopper attrape et attire ses ennemis avant de les réduire en miettes d’un coup de déferrailleur. Il est assez robuste pour survivre à de lourds dégâts, et peut récupérer ses points de vie grâce à son inhalateur.");

        $hero21=new Hero();
        $hero21->setName("Winston");
        $hero21->setCategory($category4);
        $hero21->setDescription("Winston manie d’impressionnantes inventions (des propulseurs, un canon Tesla dévastateur et un générateur d’écran portable, entre autres) avec une force littéralement surhumaine.");

        $hero22=new Hero();
        $hero22->setName("Zarya");
        $hero22->setCategory($category4);
        $hero22->setDescription("Avec ses robustes écrans convertissant les dégâts subis en énergie pour son énorme canon à particules, Zarya représente un atout de choix pour tenir les premières lignes du champ de bataille.");

        $hero23=new Hero();
        $hero23->setName("Tracer");
        $hero23->setCategory($category1);
        $hero23->setDescription("Armées de deux pulseurs, de bombes à retardement énergétiques et d’une langue bien pendue, Tracer est capable de passer immédiatement d’un endroit à un autre et de remonter dans le temps pour mieux combattre les injustices à travers le monde.");

        $hero24=new Hero();
        $hero24->setName("Chacal");
        $hero24->setCategory($category2);
        $hero24->setDescription("Chacal a tout ce qu’il faut dans son arsenal pour interdire l’accès d’une zone à ses adversaires : un lance-grenades qui tire des projectiles rebondissants, des mines incapacitantes qui envoient valser ses ennemis et des pièges d’acier pour les immobiliser.");

        $hero25=new Hero();
        $hero25->setName("Symmetra");
        $hero25->setCategory($category3);
        $hero25->setDescription("Symmetra utilise son projecteur de rayons pour éliminer ses adversaires, protéger ses alliés, placer des téléporteurs et déployer des tourelles sentinelles à particules.");

        $hero26=new Hero();
        $hero26->setName("Zenyatta");
        $hero26->setCategory($category3);
        $hero26->setDescription("Zenyatta invoque des orbes d’harmonie et de discorde pour soigner ses coéquipiers et affaiblir ses ennemis, tout en maintenant un état de transcendance qui le rend insensible aux dégâts.");
        
       
       $heroes = [$hero1,$hero2,$hero3,$hero4,$hero5,$hero6,$hero7,$hero8,$hero9,$hero10,$hero11,$hero12,$hero14,$hero15,$hero16,$hero17,$hero18,$hero19,$hero20,$hero21,$hero22,$hero23,$hero24,$hero25,$hero26];
       
       foreach ($heroes as $currentHero) {
           $em->persist($currentHero);
       }

        $em->flush();

        $output->writeln('<info>OK</info>');

        $user = new User();
        $user->setEmail('theophile.cibert@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'theo'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('gautier.nicollet@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'gautier'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('joueur.casu@overwatch.fr');
        $user->setPassword($passwordEncoder->encodePassword($user, 'lecasu'));
        $user->setRoles(['ROLE_USER']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setPassword($passwordEncoder->encodePassword($user, 'admin'));
        $user->setRoles(['ROLE_ADMIN']);
        $em->persist($user);

        $user = new User();
        $user->setEmail('user@user.com');
        $user->setPassword($passwordEncoder->encodePassword($user, 'user'));
        $user->setRoles(['ROLE_USER']);
        $em->persist($user);


        $em->flush();
        $output->writeln('<info>Import users OK !</info>');
       
    }   
}
