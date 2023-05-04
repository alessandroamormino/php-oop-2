<?php 
// db nel quale istanzio le mie classi

$foods = [
  new Food('Crocchette', './imgs/crocchette_cucciolo.jpg', 'gatto', 'Royal Canin', 9.99, 3453453450, 6, 10, 'Secco','Cuccioli'),
  new Food('Purina ONE Sterilized', './imgs/umido_gatti.jpg', 'gatto', 'Purina ONE', 4.99, 9998887776, 15, 10, 'Umido','Sterilizzati'),
  new Food('Friskies Adult', './imgs/crocchette_cani_adulti.jpg', 'cane', 'Friskies', 18.99, 7776665554, 3, 0, 'Secco','Adulti'),
  new Food('Cesar Pollo', './imgs/umido_cani.webp', 'cane', 'Cesar', 1.15, 4446663335, 24, 0, 'Umido','Per tutti'),
  new Food('Ducky Hearts', './imgs/snack_gatti.png', 'gatto', 'Trixie', 2.09, 8887771112, 50, 5, 'Secco','Snack'),
];

$games = [
  new Game('Kong Squeakair', './imgs/pallina_cani.jpg', 'cane', 'Kong', 4.55, 9999998887, 150, 15, 'Giallo', 'Tessuto', 'È una pallina da tennis e basta'),
];

$kennels = [
  new Kennel('Cuccia per cani', './imgs/cuccia.png', 'cane', 'brand03', 149.99, 8887776663, 4, 20, 'marrone', 'legno', '200x200', 'esterni'),
];