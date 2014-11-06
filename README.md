Roundcube strip domain
======================

This plugin removes the domain part from usernames before logging in.

For instance, a user that tries to log in as `myuser@anydomain.tld` will have
his username changed to `myuser`, ignoring the domain.

License
-------

This plugin is released under the [GNU General Public License Version 3+][gpl].


Installation
------------

Clone this repository or download it as a zip. Place its contents into a
new directory called `stripdomain` inside the `plugins/` directory.

Enable it in your Roundcube configuration file as `stripdomain`.


[gpl]: http://www.gnu.org/licenses/gpl.html
