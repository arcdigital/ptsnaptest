from setuptools import setup, find_packages


setup(
	name='pterodactyl',
	packages=find_packages(),
	install_requires=[
		'certbot==0.14.1',
		'zope.interface',
	],
	entry_points={
		'certbot.plugins': [
			'webroot = certbot_pterodactyl_plugin.webroot:Authenticator',
		],
	},
)
