PGDMP     :    9                y           recordstorerock    13.2    13.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    41165    recordstorerock    DATABASE     j   CREATE DATABASE recordstorerock WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Greek_Greece.1253';
    DROP DATABASE recordstorerock;
                postgres    false            �            1259    41249    favorite    TABLE     �   CREATE TABLE public.favorite (
    fav_id integer NOT NULL,
    tittle character varying(250) NOT NULL,
    creator character varying(250) NOT NULL,
    price integer NOT NULL
);
    DROP TABLE public.favorite;
       public         heap    postgres    false            �            1259    41247    favorite_fav_id_seq    SEQUENCE     �   CREATE SEQUENCE public.favorite_fav_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.favorite_fav_id_seq;
       public          postgres    false    203            �           0    0    favorite_fav_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.favorite_fav_id_seq OWNED BY public.favorite.fav_id;
          public          postgres    false    202            �            1259    41256    showfav    TABLE     �   CREATE TABLE public.showfav (
    tittle character varying(32) NOT NULL,
    creator character varying(32) NOT NULL,
    price integer NOT NULL
);
    DROP TABLE public.showfav;
       public         heap    postgres    false            �            1259    41236    users    TABLE       CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(255) NOT NULL,
    firstname character varying(255) NOT NULL,
    lastname character varying(255) NOT NULL,
    email character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    41234    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    201            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    200            /           2604    41252    favorite fav_id    DEFAULT     r   ALTER TABLE ONLY public.favorite ALTER COLUMN fav_id SET DEFAULT nextval('public.favorite_fav_id_seq'::regclass);
 >   ALTER TABLE public.favorite ALTER COLUMN fav_id DROP DEFAULT;
       public          postgres    false    202    203    203            .           2604    41239    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200    201            �          0    41249    favorite 
   TABLE DATA           B   COPY public.favorite (fav_id, tittle, creator, price) FROM stdin;
    public          postgres    false    203          �          0    41256    showfav 
   TABLE DATA           9   COPY public.showfav (tittle, creator, price) FROM stdin;
    public          postgres    false    204          �          0    41236    users 
   TABLE DATA           S   COPY public.users (id, username, password, firstname, lastname, email) FROM stdin;
    public          postgres    false    201   ,       �           0    0    favorite_fav_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.favorite_fav_id_seq', 1, false);
          public          postgres    false    202            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 30, true);
          public          postgres    false    200            5           2606    41254    favorite favorite_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.favorite
    ADD CONSTRAINT favorite_pkey PRIMARY KEY (fav_id);
 @   ALTER TABLE ONLY public.favorite DROP CONSTRAINT favorite_pkey;
       public            postgres    false    203            7           2606    41260    showfav showfav_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.showfav
    ADD CONSTRAINT showfav_pkey PRIMARY KEY (tittle);
 >   ALTER TABLE ONLY public.showfav DROP CONSTRAINT showfav_pkey;
       public            postgres    false    204            1           2606    41244    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    201            3           2606    41246    users users_username_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_key UNIQUE (username);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_username_key;
       public            postgres    false    201            �   �   x�uP�j�0|��B?��&n�=.)c�v�ul0�i����%v���s
٠/򝥓N��[c�����a
�o���\�;�Ϭ��͆"��\�N��B)[i��Ca���D{YU�7��� �(`g��9R��k��s��Hqy�	�GqD�ź�!d3\�N��!S*s�m/5L�Xa��������ְ��#��;*tWQ.Mo�o����L�����^o�a$"�;X�6l�j&�E>��Ykn�L���yH      �      x������ � �      �   U  x�US�n�0>�>L�v�����"�VE��o�꺛�+'�!.} x �T	�B}�+1vH��|��g&�.�^h�3���Јqp_��᳻w?�#�o������~��#�P�;�2v�5u)Tq��rF�pa����p_�/��~�1�r1���&��:���q��^]�!�F(�SU�_�Vp�����7�F!K#a��jZ�[�1��F!4�2S�M.�z-�Z©��[y�߶��=m��J��n ��,D%Ἡ���Ք�;�X�0��z#X6�bÙX�F�Ed1�\EpƔ���������i��I���U���j<��Y�C��� �iu'ǡYket���qF\�
��D�p��B��a<
O���'��,�y�/��ǜ�,�<^�Μ2(<6W�����zs\X/���̯&�=�E��*�ƱVf-m���8�l���:dۣiAV*�
��!�z����b�6�J��`�'����ur\Xg���R����Κ&O�T�f<���=�ٴA�3gpR�ww_v���RkU�jD��5nѮ���P�D[������G���/��5     