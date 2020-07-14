Деплой в Docker Swarm

```bash
docker stack deploy -c redis.yml m2t
docker stack deploy -c rabbitmq.yml m2t
docker stack deploy -c mail-proxy.yml m2t
docker stack deploy -c bot-receiver.yml m2t
docker stack deploy -c bot-handler.yml m2t
```

Статус и логи
```bash
docker service ls
docker service logs m2t_bot-handler
```
