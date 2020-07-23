Деплой в Docker Swarm

Подготовка
```bash
docker swarm init
docker volume create m2t_redis_data
docker network create --driver=overlay --attachable m2t_net
```

Запуск сервисов
```bash
docker stack deploy -c services/rabbitmq.yml m2t
docker stack deploy -c services/redis.yml m2t
docker stack deploy -c services/bot-receiver.yml m2t
docker stack deploy -c services/bot-handler.yml m2t
docker stack deploy -c services/mail-proxy.yml m2t
```

Статус и логи
```bash
docker service ls
docker service logs m2t_rabbitmq -t 2>&1 | sort -k 1
docker service logs m2t_redis -t 2>&1 | sort -k 1
docker service logs m2t_bot-receiver -t 2>&1 | sort -k 1
docker service logs m2t_bot-handler -t 2>&1 | sort -k 1
docker service logs m2t_mail-proxy -t 2>&1 | sort -k 1
```

Удаление ненужного
```bash
docker service rm m2t_bot-handler
docker stack rm m2t
docker swarm leave --force
docker volume rm m2t_redis_data
docker network rm m2t_net
```
