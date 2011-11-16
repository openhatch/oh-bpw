all: public/index.html public/about/index.html public/events/index.html public/press/index.html public/clone-it/index.html public/thanks/index.html

clean:
	@rm -f public/*.html public/*/*.html

public/index.html: template.php page-data/index
	php page-data/index > public/index.html

public/about:
	mkdir -p public/about

public/about/index.html: template.php page-data/about public/about
	php page-data/about > public/about/index.html

public/events:
	mkdir -p public/events

public/events/index.html: template.php page-data/events public/events
	php page-data/events > public/events/index.html

public/press:
	mkdir -p public/press

public/press/index.html: template.php page-data/press public/press
	php page-data/press > public/press/index.html

public/clone-it:
	mkdir -p public/clone-it

public/clone-it/index.html: template.php page-data/clone-it public/clone-it
	php page-data/clone-it > public/clone-it/index.html

public/thanks:
	mkdir -p public/thanks

public/thanks/index.html: template.php page-data/thanks public/thanks
	php page-data/thanks > public/thanks/index.html

