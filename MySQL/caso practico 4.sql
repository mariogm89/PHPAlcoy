-- Mostrar todas las peliculas
SELECT title FROM `film` WHERE 1
-- Cuantos actores hay
SELECT count(*) AS `Total de actores` FROM `actor` WHERE 1
-- Todos los nombres de peliculas y su duración ordenadas por duración con descripción "drama"
SELECT title, length from film where description LIKE '% Drama %' order by length desc
-- Nombre de actores (fist_name) y cuantas veces se repite, mostrando solo los que se repiten más de una vez y ordenados de mayor a menor
SELECT first_name, count(*) AS `Total` FROM `actor` group by first_name having `Total` > 1 order by Total desc
-- Titulo de película junto a su idioma
SELECT film.title, language.name FROM `film` join language on (film.language_id = language.language_id)
-- Hay alguna que no sea inglesa?
SELECT film.title, language.name FROM `film` join language on (film.language_id = language.language_id) WHERE not language.name = 'English'
-- Añadir español a la tabla idioma
INSERT INTO language (name) value ('Spanish')
-- Modificar el actor con id 4 a LEE-DAVIS
UPDATE actor set last_name = 'LEE-DAVIS' where actor_id = 4
-- Mostrar los actores que vivan por la pais que empieza por E
SELECT customer.first_name, customer.last_name, country.country FROM `customer` join address on (customer.address_id = address.address_id) join city on (address.city_id = city.city_id) join country on (country.country_id = city.country_id) where country.country like 'E%'
-- Mostrar el total de actores que vivan el cada país que empieza por E
SELECT count(*), country.country FROM `customer` join address on (customer.address_id = address.address_id) join city on (address.city_id = city.city_id) join country on (country.country_id = city.country_id) where country.country like 'E%' group by country.country
