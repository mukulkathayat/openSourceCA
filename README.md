# openSourceCA
Project: To print electricity bill for the no of unit. Units must be given as an input by the user, it will print the electricity bill using: i. For first 50 units, it will charge Rs 9 per unit ii. For next 50 units, it will charge Rs 12 and iii. Above it, it will charge Rs 15.

To run this electricity bill calculator, follow this step to run it locally:
1. Make sure php & apache2 is installed in your system
2. Run apache server 
	sudo systemctl start apache2
3. copy this "electricity.php" file in /var/www/html or use 
	sudo mv electricity.php /var/www/html
4. Now, open web-browser and type in "localhost/electricity.php"

5. Bill calculator is working now.