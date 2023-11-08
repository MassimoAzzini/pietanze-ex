<?php

$pietanze=[
  new Pizza("integrale", "normale", "Margherita", ["pomodoro", "mozzarella", "basilico"], new Media ("vegetariana.jpg", "margherita"), 6, 4),
  new Pasta("Carbonara", ["uova", "guanciale", "pepe", "pecorino"], new Media ("carbonara.jpg", "pasta alla carbonara"), 6, 3, "rigatoni", "00",),
  new Pizza("normale", "normale", "Vegetariana", ["pomodoro", "mozzarella", "verdure alla griglia"], new Media ("vegetariana.jpg", "vegetariana"), 5, 3),
  new Pasta("Amatriciana", ["pomodoro", "guanciale", "pecorino"], null , 6, 4, "rigatoni", "00")
];