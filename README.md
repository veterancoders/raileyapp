# raileyapp

<h2>How to set up and run the project locally</h2>

<h4>Prerequisites</h4>
<p><strong>Composer</strong> installed</p>
    <p><strong>PHP</strong> installed</p>
    <p><strong>XAMPP</strong> installed</p>


<ol>
    <li> 
       Download the project and paste into your local server files i.e C:\xampp\htdocs (for xampp users)
    </li>
    <li>Ensure you have Composer installed. Navigate to the project directory and run: <br><br> <pre><code>composer install</code></pre></li>
    <li>Optional - Open the .env file and configure the following settings: <br><br> <pre><code>APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

</code></pre><br> If there is no .env file, create a file and name it .env. Go to .env.example and copy the file into the .env you just created.</li>
  <li>Required - Make sure to configure the following .env settings: <br><br> <pre><code>
MAIL_MAILER=your_mailer #usually smtp or imap
MAIL_HOST=your_mail_host
MAIL_PORT=your_mail_port
MAIL_USERNAME=your_mail_username
MAIL_PASSWORD=your_mail_password
MAIL_ENCRYPTION=your_mail_encryption
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

</code></pre><br> You can make use of mail servers such as <a hred="https://mailchimp.com/">Mailchimp</a> or <a hred="https://mailtrap.io/">Mailtrap</a></li>
<li> Generate the application key, which is used for encryption: <br><br> <pre><code>php artisan key:generate</code></pre></li>
<li> If you originally set your database settings, migrate your database to set up the necessary tables:<br><br> <pre><code>php artisan migrate</code></pre></li>
<li> Start the Laravel development server: <br><br> <pre><code>php artisan serve</code></pre>Your application should now be running at http://localhost:8000.</li>
</ol>

<h2>Assumptions or decisions made during the development</h2>
<h5>Assumptions</h5>
<p> During the development, i assumed that the user require both web and mobile responsiveness with well placed animations</p>
<p> I assumed that HTTPS would be used in production to secure data transmission since there is a mailing feature.</p>
<h5>Decisions</h5>
<p> I decided to use a css animation plugin to ensure smooth animation on the front end</p>
<p> I decided to use Laravel framework due to its robust features, security ensuring secured HTTPS connection and easy integration of the mail.</p>

<h2>Challanges faced and how they were overcome</h2>

<p>Well one challange i can say i faced was during deployment on my digital ocean account. It turns out i cannot access the free feature to access the cloud storage. Also, i wont be able to get mailer details from there except i use a third party mailer. </p>
<p>I overcame this minor challange by hosting instead on a subdomain of my personal server.I also seamelessly configured my mailer settings to that of my host.</p>
