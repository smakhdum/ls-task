<h1>SQL Problem<h1>

<pre> 
select *
from posts
where user_id = ? and active = 1 or votes >= 100<pre>

<p>
Explanation:
Here select all column from posts table where user_id column is equal to ? AND active column is equla to 1 ; both side should return satisfactory data,
after AND-operation make OR which condition is votes is grater than or equal to 100
</p>
