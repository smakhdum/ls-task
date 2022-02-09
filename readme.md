<h1>SQL Problem<h1>

<pre> 
select *
from posts
where user_id = ? and active = 1 or votes >= 100<pre>

<p>
Explanation:
Here select all columns from the posts table where the user_id column is equal to ?[given id] AND Active column value is equal to 1; if both sides return satisfactory data, this statement is true and will work.
after AND-operation now make OR operation which condition is Votes is greater than or equal to 100. or operation does not require to be true both sides. 
</p>
