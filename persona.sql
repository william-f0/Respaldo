-- Table: public.persona

-- DROP TABLE public.persona;

CREATE TABLE public.persona
(
  id integer not null check (id>0),
  nombre varchar(60) not null,
  telefono bigint,
  primary key(id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.persona
  OWNER TO postgres;
