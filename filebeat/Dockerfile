FROM docker.elastic.co/beats/filebeat:8.2.3

COPY filebeat.yml /usr/share/filebeat/filebeat.yml
COPY mysql.yml /usr/share/filebeat/modules.d/mysql.yml

USER root

#RUN mkdir /usr/share/filebeat/dockerlogs
RUN chown -R root /usr/share/filebeat/
RUN chmod -R go-w /usr/share/filebeat/

