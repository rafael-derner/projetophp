PGDMP     	                
    x            banco_projeto_php    13.0    13.0     �           0    0    ENCODING    ENCODING         SET client_encoding = 'LATIN1';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16395    banco_projeto_php    DATABASE     q   CREATE DATABASE banco_projeto_php WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
 !   DROP DATABASE banco_projeto_php;
                root_projeto    false            �           0    0    DATABASE banco_projeto_php    COMMENT     [   COMMENT ON DATABASE banco_projeto_php IS 'Banco criado para desenvolver o projeto de PHP';
                   root_projeto    false    3003            �            1259    16398    especialidade    TABLE     �   CREATE TABLE public.especialidade (
    especialidade_sigla character varying(5) NOT NULL,
    especialidade_id integer NOT NULL,
    especialidade_descricao character varying(100) NOT NULL
);
 !   DROP TABLE public.especialidade;
       public         heap    root_projeto    false            �           0    0    TABLE especialidade    COMMENT     F   COMMENT ON TABLE public.especialidade IS 'Tabela para especialidade';
          public          root_projeto    false    201            �            1259    16396 "   especialidade_especialidade_id_seq    SEQUENCE     �   CREATE SEQUENCE public.especialidade_especialidade_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.especialidade_especialidade_id_seq;
       public          root_projeto    false    201            �           0    0 "   especialidade_especialidade_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.especialidade_especialidade_id_seq OWNED BY public.especialidade.especialidade_id;
          public          root_projeto    false    200            �            1259    16406    medico    TABLE     H  CREATE TABLE public.medico (
    medico_id integer NOT NULL,
    medico_nome character varying(100) NOT NULL,
    medico_sexo character varying(1) NOT NULL,
    medico_crm character varying(13) NOT NULL,
    medico_cpf character varying(11) NOT NULL,
    medico_email character varying,
    especialidade_id integer NOT NULL
);
    DROP TABLE public.medico;
       public         heap    root_projeto    false            �           0    0    TABLE medico    COMMENT     S   COMMENT ON TABLE public.medico IS 'Tabela criada para armazenar os profissionais';
          public          root_projeto    false    203            �            1259    16404    medico_medico_id_seq    SEQUENCE     �   CREATE SEQUENCE public.medico_medico_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.medico_medico_id_seq;
       public          root_projeto    false    203            �           0    0    medico_medico_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.medico_medico_id_seq OWNED BY public.medico.medico_id;
          public          root_projeto    false    202            )           2604    16401    especialidade especialidade_id    DEFAULT     �   ALTER TABLE ONLY public.especialidade ALTER COLUMN especialidade_id SET DEFAULT nextval('public.especialidade_especialidade_id_seq'::regclass);
 M   ALTER TABLE public.especialidade ALTER COLUMN especialidade_id DROP DEFAULT;
       public          root_projeto    false    200    201    201            *           2604    16409    medico medico_id    DEFAULT     t   ALTER TABLE ONLY public.medico ALTER COLUMN medico_id SET DEFAULT nextval('public.medico_medico_id_seq'::regclass);
 ?   ALTER TABLE public.medico ALTER COLUMN medico_id DROP DEFAULT;
       public          root_projeto    false    202    203    203            �          0    16398    especialidade 
   TABLE DATA           g   COPY public.especialidade (especialidade_sigla, especialidade_id, especialidade_descricao) FROM stdin;
    public          root_projeto    false    201          �          0    16406    medico 
   TABLE DATA           }   COPY public.medico (medico_id, medico_nome, medico_sexo, medico_crm, medico_cpf, medico_email, especialidade_id) FROM stdin;
    public          root_projeto    false    203   4       �           0    0 "   especialidade_especialidade_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.especialidade_especialidade_id_seq', 28, true);
          public          root_projeto    false    200            �           0    0    medico_medico_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.medico_medico_id_seq', 6, true);
          public          root_projeto    false    202            ,           2606    16403     especialidade especialidade_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.especialidade
    ADD CONSTRAINT especialidade_pkey PRIMARY KEY (especialidade_id);
 J   ALTER TABLE ONLY public.especialidade DROP CONSTRAINT especialidade_pkey;
       public            root_projeto    false    201            .           2606    16414    medico medico_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY public.medico
    ADD CONSTRAINT medico_pkey PRIMARY KEY (medico_id);
 <   ALTER TABLE ONLY public.medico DROP CONSTRAINT medico_pkey;
       public            root_projeto    false    203            /           2606    16415    medico especialidade_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.medico
    ADD CONSTRAINT especialidade_id FOREIGN KEY (especialidade_id) REFERENCES public.especialidade(especialidade_id);
 A   ALTER TABLE ONLY public.medico DROP CONSTRAINT especialidade_id;
       public          root_projeto    false    201    2860    203            �      x������ � �      �      x������ � �     