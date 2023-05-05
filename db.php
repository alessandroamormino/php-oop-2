<?php 
// db nel quale istanzio le mie classi

$foods = [
  new Food('Crocchette', './imgs/crocchette_cucciolo.jpg', 'gatto', 'Royal Canin', 9.99, 3453453450, 6, 10, 'Secco','Cuccioli', 200.00),
  new Food('Purina ONE Sterilized', './imgs/umido_gatti.jpg', 'gatto', 'Purina ONE', 4.99, 9998887776, 15, 10, 'Umido','Sterilizzati', 60.00),
  new Food('Friskies Adult', './imgs/crocchette_cani_adulti.jpg', 'cane', 'Friskies', 18.99, 7776665554, 3, 0, 'Secco','Adulti', 2000.50),
  new Food('Cesar Pollo', './imgs/umido_cani.webp', 'cane', 'Cesar', 1.15, 4446663335, 24, 0, 'Umido','Per tutti', 150.50),
  new Food('Ducky Hearts', './imgs/snack_gatti.png', 'gatto', 'Trixie', 2.09, 8887771112, 50, 5, 'Secco','Snack', 70.00),
];

$games = [
  new Game('Kong Squeakair', './imgs/pallina_cani.jpg', 'cane', 'Kong', 4.55, 9999998887, 150, 15, 'Giallo', 'Tessuto', 'È una pallina da tennis e basta', 30.50),
  new Game('Castello Tiragraffi', './imgs/tiragraffi_gatti.jpg', 'gatto', 'Amazon Brand', 80.99, 5432226667, 8, 20, 'Grigio', 'Tessuto', 'È un castello con dei tiragraffi', 3500.00),
  new Game('Topolino', './imgs/topolino.jpg', 'gatto', 'Trixie', 14.99, 4444226667, 42, 5, 'Marrone', 'Tessuto', 'È un topolino semplicissimo', 15.00),
  new Game('Osso Cani', './imgs/osso.jpg', 'cane', 'Kong', 17.00, 8887770001, 33, 0, 'Rosso', 'Plastica', 'È un osso per cani', 500.50),
  new Game('Bottle Buddy', './imgs/bottiglia_cani.jpg', 'cane', 'Karlie', 8.50, 9293736451, 13, 10, 'Grigio/Azzurro', 'Tessuto', 'È un peluche per cani', 200.00),
];

$kennels = [
  new Kennel('Cuccia per cani', './imgs/cuccia_cane1.jpg', 'cane', 'PerilCane', 329.99, 2342343456, 10, 15, 'Marrone/Verde', 'Legno', '300x200', 'Esterno'),
  new Kennel('Charles 50 Ferplast', './imgs/cuccia_cane2.jpg', 'cane', 'Charles', 67.50, 8768766542, 20, 10, 'Grigio', 'Tessuto', '200x200', 'Interno'),
  new Kennel('Vanasa Gatti', './imgs/cuccia_gatti1.jpg', 'gatto', 'Vanasa', 19.99, 9870980989, 99, 0, 'Grigio', 'Tessuto', '100x100', 'Interno'),
  new Kennel('Vanasa Gatti', './imgs/cuccia_gatti2.jpg', 'gatto', 'CinaKennel', 23.99, 9833380989, 184, 7, 'Grigio/Bianco', 'Tessuto', '150x100', 'Interno'),
  new Kennel('Retex Kennel', './imgs/cuccia_cane3.webp', 'cane', 'Retex Shop', 500.00, 8887779998, 4, 25, 'Grigio/Verde', 'Alluminio', '300x200', 'Esterno'),

];