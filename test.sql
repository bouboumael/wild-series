php bin/console d:q:sql 'INSERT INTO program (id, title, summary, poster, category_id) VALUES 
(NULL, "Walking Dead", "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.", "https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg", 1), 
(NULL, "The Haunting Of Hill House", "Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.", "https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg", 1), 
(NULL, "American Horror Story", "A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.", "https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg", 19), ,
(NULL, "Love Death And Robots", "Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.", "https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg", 1),                                                                                                                                    ,
(NULL, "Penny Dreadful", "Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.", "https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg", 1), 
(NULL, "Fear The Walking Dead", "La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.", "https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg", 1);'
php bin/console d:q:sql 'INSERT INTO season (program_id, number, year, description) VALUES
(25, 1, 2010, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 2, 2011, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 3, 2012, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 4, 2013, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 5, 2014, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 6, 2015, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 7, 2016, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 8, 2017, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 9, 2018, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 10, 2019, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants."),
(25, 11, 2021, "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.");'

php bin/console d:q:sql 'INSERT INTO episode (season_id, title, number, synopsis) VALUES
(1, "Days Gone Bye", 1, "Deputy Sheriff Rick Grimes awakens from a coma, and searches for his family in a world ravaged by the undead."),
(1, "Guts", 2, "In Atlanta, Rick is rescued by a group of survivors, but they soon find themselves trapped inside a department store surrounded by walkers."),
(1, "Tell It to the Frogs", 3, "Rick is reunited with Lori and Carl but soon decides - along with some of the other survivors - to return to the rooftop and rescue Merle. Meanwhile, tensions run high between the other survivors at the camp."),
(1, "Vatos", 4, "Rick, Glenn, Daryl and T-Dog come across a group of seemingly hostile survivors whilst searching for Merle. Back at camp, Jim begins behaving erratically."),
(1, "Wildfire", 5, "After the attack on the camp, Rick leads the survivors to the C.D.C., in the hope that they can cure an infected Jim."),
(1, "TS-19", 6, "The survivors gain access to the C.D.C. in the hope of a safe haven."),
(2, "What Lies Ahead", 1, "The group plan to head for Fort Benning is put on hold when Sophia goes missing."),
(2, "Bloodletting", 2, "After Carl is accidentally shot, the group are brought to a family living on a nearby farm. Shane makes a dangerous trip in search of medical supplies."),
(2, "Save the Last One", 3, "As Carl condition continues to deteriorate, Shane and Otis try to dodge the walkers as they head back to the farm."),
(2, "Cherokee Rose", 4, "With Carl recovering, the group puts their focus on finding Sophia. Glenn and Maggie go for a trip to find supplies.");'

symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Andrew Lincoln");'
symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Norman Reedus") ;'
symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Lauren Cohan") ;'
symfony console doctrine:query:sql 'INSERT INTO `actor` (`name`) VALUES ("Danai Gurira") ;'