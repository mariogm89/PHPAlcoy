select customer.first_name, customer.last_name, sum(amount) AS `Total` 
from customer join payment on (customer.customer_id = payment.customer_id)
group by customer.customer_id 
order by `Total` desc
limit 0,5; --limit 0,5 / limit 5,5

SELECT address.address, sum(payment.amount) AS `Total` 
FROM store 
join address on store.address_id = address.address_id 
join staff on staff.store_id = store.store_id
join payment on payment.staff_id = staff.staff_id
group by address desc;

SELECT film.title, group_concat(actor.first_name, ' ', actor.last_name separator ', ') AS Actores
FROM film 
join film_actor on film_actor.film_id = film.film_id
join actor on actor.actor_id = film_actor.actor_id 
where actor.first_name like 'Woody' 
group by film.title
order by film.title;