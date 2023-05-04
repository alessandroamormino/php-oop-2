<?php 
// db nel quale istanzio le mie classi

// $products = [
//   new Product('Crocchette', './imgs/crocchette.png', 'gatti', 'royal canin', 6.96, 1234567890, 10, 30),
// ];

$foods = [
  new Food('Cibo in scatola', './imgs/crocchette.png', 'gatti', 'brand01', 9.99, 3453453450, 6, 0, 'umido','cuccioli')
];

$games = [
  new Game('Pallina', './imgs/pallina.png', 'cani', 'brand02', 2.99, 999444888, 100, 10, 'gialla', 'tessuto', 'è una pallina da tennis e basta'),
];

$kennels = [
  new Kennel('Cuccia per cani', './imgs/cuccia.png', 'cani', 'brand03', 149.99, 8887776663, 4, 20, 'marrone', 'legno', '200x200', 'esterni'),
];