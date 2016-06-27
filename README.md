# php_demo
Quick demo using MySql, PHP, HTML and CSS

Since I'm new to PHP I'm only hoping I'm complying with best practices and naming convention (which is mostly Java standard here).

I'm not using joins to get one table back from MySQL, rather use PHP logic to create the resulting multi-dimensional array to work with later in the code.

I'm calling the file again and again for sorting and I don't validate 'sortBy'. In fact, I don't really validate anything besides the connection and the results. I'm also not using any frameworks, this is just one simple demo file. Because of that I'm also querying the DB every time I sort, because performance is no issue with this demo. However, this is not how I would implement a real sort for a DB query in a real life scenario.

The page contains a simple CSS that gives zebra stripes to the table and makes it look not so ugly and a simple table with header.

Feel free to use any part of this code, but please treat it as a demo solution.

If I have time, I will extend this to use the MVC framework (which I have been working with in the Java realm) and with more secure data management, validation and some actual design.

Val - awagnerur - Nagy
