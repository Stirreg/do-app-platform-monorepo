# Registering with DigitalOcean App Platform
1. Make sure you have docker installed.
2. Go to .do folder by executing `cd .do`.
3. Run `docker run -v ${PWD}:/app/.do --rm --interactive --tty --env=DIGITALOCEAN_ACCESS_TOKEN=<ACCESS_TOKEN> digitalocean/doctl apps create --spec .do/do-app-platform-monorepo.yaml` (replace <ACCESS_TOKEN> with your own from DigitalOcean).
