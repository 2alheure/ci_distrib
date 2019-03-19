# Standard distribution for CodeIgniter projects

This is my personnal distribution for CodeIgniter projects. It aims to be cloned and almost ready to use.

This provides a CodeIgniter 3.1.10 distribution plus :
- A helper `my_helper` with multiple functions.
- An `Asset` model which handles assets (located in `assets/` directory).
- A `Console` library, based on [this CodeIgniter library](https://github.com/lonnieezell/codeigniter-forensics) and a bit modified, which extends the native CodeIgniter Profiler to provide a better interface for debugging console.
- The french language package.
- A `.htaccess` file to ommit the `/index.php/` part in URL.
- A `base` view, which is a template holder.

## TODO to initialize a project

Do your configuration :
- Database
- Autoload

Change the base url in `config/config.php`, then change the ending portion of url and your environment in the `.htaccess` file.

Now you're done. Happy coding.