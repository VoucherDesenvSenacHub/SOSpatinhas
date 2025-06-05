CREATE DATABASE SOS_PATINHAS;
USE SOS_PATINHAS;

CREATE TABLE TIPO_OBJ (
    ID_TIPO_OBJ INT PRIMARY KEY AUTO_INCREMENT,
    DS_TIPO_OBJ VARCHAR(15)
);

CREATE TABLE ANIMAL (
    ID_ANIMAL INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50),
    TIPO_ANIMAL VARCHAR(30),
    RACA VARCHAR(100),
    PORTE VARCHAR(7),
    IDADE VARCHAR(11),
    DESCRICAO TEXT,
    SEXO VARCHAR(5)
);

CREATE TABLE FOTO (
    ID_FOTO INT PRIMARY KEY AUTO_INCREMENT,
    ID_OBJ INT,
    ID_TIPO_OBJ INT, 
    CAMINHO_FOTO VARCHAR(100),
    FOREIGN KEY (ID_TIPO_OBJ) REFERENCES TIPO_OBJ(ID_TIPO_OBJ)
);

CREATE TABLE ARRECADACAO (
    ID_ARRECADACAO INT PRIMARY KEY AUTO_INCREMENT,
    TITULO VARCHAR(100),
    NOME_ANIMAL VARCHAR(100),
    DESCRICAO VARCHAR(100),
    VL_ARRECADACAO INT,
    VL_ARRECADADO INT,
    NM_CONTA VARCHAR(100),
    NU_CONTA INT,
    NU_AGENCIA INT,
    QR_CODE VARCHAR(100)
);

CREATE TABLE EVENTO (
    ID_EVENTO INT PRIMARY KEY AUTO_INCREMENT,
    TITULO VARCHAR(100),
    DESCRICAO TEXT,
    CIDADE VARCHAR(50),
    ESTADO VARCHAR(2),
    LOCAL_EVENTO VARCHAR(100)
);

CREATE TABLE ADM (
    ID_ADM INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50),
    EMAIL VARCHAR(254) UNIQUE,
    TELEFONE VARCHAR(20),
    SENHA VARCHAR(255)
);

CREATE TABLE PERMISSAO (
    ID_PERMISSAO INT PRIMARY KEY AUTO_INCREMENT,
    PAGINA VARCHAR(100)
);

CREATE TABLE PERMISSAO_ADM (
    ID_PERMISSAO_ADM INT PRIMARY KEY AUTO_INCREMENT,
    ID_ADM INT,
    ID_PERMISSAO INT,
    FG_ACESSO BOOLEAN,
    FOREIGN KEY (ID_ADM) REFERENCES ADM(ID_ADM),
    FOREIGN KEY (ID_PERMISSAO) REFERENCES PERMISSAO(ID_PERMISSAO)
);

CREATE TABLE PARTE_EDITAVEL (
    ID_PARTE_EDITAVEL VARCHAR(100),
    INPUT_SIMPLES VARCHAR(100),
    TEXTAREA VARCHAR(100),
    CAMINHO_IMAGEM VARCHAR(100)
);

CREATE TABLE FORMULARIO_PERGUNTA (
    ID_FORMULARIO_PERGUNTA INT PRIMARY KEY AUTO_INCREMENT,
    DS_FORMULARIO_PERGUNTA VARCHAR(100)
);

CREATE TABLE FORMULARIO_PERGUNTA_RESPOSTA (
    ID_FORMULARIO_RESPOSTA INT PRIMARY KEY AUTO_INCREMENT,
    ID_FORMULARIO_PERGUNTA INT,
    DS_FORMULARIO_RESPOSTA VARCHAR(100),
    FOREIGN KEY (ID_FORMULARIO_PERGUNTA) REFERENCES FORMULARIO_PERGUNTA(ID_FORMULARIO_PERGUNTA)
);

CREATE TABLE FORMULARIO_RELATORIO (
    ID_FORMULARIO_RELATORIO INT PRIMARY KEY AUTO_INCREMENT,
    ID_ANIMAL INT,
    ID_FORMULARIO_PERGUNTA_RESPOSTA INT,
    CIDADE VARCHAR(100),
    ESTADO VARCHAR(100),
    RUA VARCHAR(100),
    NU_RUA INT,
    BAIRRO VARCHAR(100),
    COMPLEMENTO VARCHAR(100),
    FOREIGN KEY (ID_ANIMAL) REFERENCES ANIMAL(ID_ANIMAL),
    FOREIGN KEY (ID_FORMULARIO_PERGUNTA_RESPOSTA) REFERENCES FORMULARIO_PERGUNTA_RESPOSTA(ID_FORMULARIO_RESPOSTA)
);

CREATE TABLE FORMULARIO_CRIAR_EDITAR(
    ID_FORMULARIO_CRIAR_EDITAR INT PRIMARY KEY AUTO_INCREMENT,
    ID_FORM VARCHAR(100),
    NAME_FIELD VARCHAR(100),
    LABEL VARCHAR(100),
    TIPO VARCHAR(100),
    OBRIGATORIO BOOLEAN,
    OPTIONS_SELECT TEXT,
    MASCARA VARCHAR(100),
    ORDEM INT
);


--- INSERTS 33
INSERT INTO TIPO_OBJ (DS_TIPO_OBJ) VALUES ('Animal'), ('Evento'), ('Arrecadação'), ('Adm');

INSERT INTO FORMULARIO_CRIAR_EDITAR(ID_FORM, NAME_FIELD, LABEL, TIPO, OBRIGATORIO, OPTIONS_SELECT, MASCARA, ORDEM) VALUES 
('Animal', 'NOME', 'Nome:', 'text', true, null, null, 1),
('Animal', 'TIPO_ANIMAL', 'Tipo Animal:', 'text', true, null, null, 2),
('Animal', 'RACA', 'Raça:', 'text', true, null, null, 3),
('Animal', 'PORTE', 'Porte:', 'select', true, 'Pequeno,Médio,Grande', null, 4),
('Animal', 'IDADE', 'Idade:', 'select', true, '-1 ano,Até 5 anos,Até 10 anos,+10 anos', null, 5),
('Animal', 'DESCRICAO', 'Descrição:', 'textarea', true, null, null, 6),
('Animal', 'SEXO', 'Sexo:', 'select', true, 'Fêmea,Macho', null, 7),
('Animal', 'CAMINHO_FOTO', null, 'imgUpload', true, null, null, 8),
('Arrecadacao', 'TITULO', 'Título:', 'text', true, null, null, 1),
('Arrecadacao', 'NOME_ANIMAL', 'Nome do Animal:', 'text', true, null, null, 2),
('Arrecadacao', 'DESCRICAO', 'Descrição:', 'textarea', true, null, null, 3),
('Arrecadacao', 'VL_ARRECADACAO', 'Valor da Arrecadação:', 'text', true, null, 'money()', 4),
('Arrecadacao', 'VL_ARRECADADO', 'Valor da Arrecadado:', 'text', true, null, 'money()', 5),
('Arrecadacao', 'NM_CONTA', 'Nome da Conta:', 'text', true, null, null, 6),
('Arrecadacao', 'NU_CONTA', 'Número da Conta:', 'text', true, null, 'number()', 7),
('Arrecadacao', 'NU_AGENCIA', 'Número da Agéncia:', 'text', true, null, 'number()', 8),
('Arrecadacao', 'QR_CODE', null, 'QRCode', true, null, null, 9),
('Arrecadacao', 'CAMINHO_FOTO', null, 'imgUpload', true, null, null, 10),
('Evento', 'TITULO', 'Título:', 'text', true, null, null, 1),
('Evento', 'DESCRICAO', 'Descrição:', 'textarea', true, null, null, 2),
('Evento', 'CIDADE', 'Cidade:', 'text', true, null, null, 3),
('Evento', 'ESTADO', 'Estado:', 'text', true, null, null, 4),
('Evento', 'LOCAL_EVENTO', 'Local do Evento:', 'text', true, null, null, 5),
('Adm', 'NOME', 'Nome:', 'text', true, null, null, 1),
('Adm', 'EMAIL', 'Email:', 'text', true, null, null, 2),
('Adm', 'TELEFONE', 'Telefone:', 'text', true, null, null, 3),
('Adm', 'SENHA', 'Senha:', 'text', true, null, null, 4);


INSERT INTO ANIMAL (NOME, TIPO_ANIMAL, RACA, PORTE, IDADE, DESCRICAO, SEXO) VALUES
('Luna', 'Cachorro', 'Labrador', 'Grande', 'Até 5 anos', 'Luna é uma labradora extremamente dócil, companheira e muito brincalhona. Gosta de correr em espaços abertos, brincar com crianças e adora água. Ideal para famílias ativas que buscam uma amiga fiel.', 'Fêmea'),
('Thor', 'Cachorro', 'Pastor Alemão', 'Grande', 'Até 10 anos', 'Thor é um pastor alemão inteligente, treinado para obediência e proteção. Tem um temperamento equilibrado, é muito leal e protetor com sua família. Se dá bem com crianças e outros animais.', 'Macho'),
('Mia', 'Gato', 'Siamês', 'Pequeno', '-1 ano', 'Mia é uma gatinha siamesa curiosa e amorosa, que adora brincar com bolinhas e se aconchegar no colo. Está acostumada com ambientes internos e se adapta bem a novos lares.', 'Fêmea'),
('Rex', 'Cachorro', 'Pitbull', 'Médio', 'Até 5 anos', 'Rex é um cão forte e energético, mas extremamente carinhoso com pessoas. Ama brincar de cabo de guerra, correr no quintal e receber atenção. Precisa de passeios diários e uma liderança firme.', 'Macho'),
('Mel', 'Cachorro', 'Poodle', 'Pequeno', 'Até 10 anos', 'Mel é uma poodle muito esperta, fácil de treinar e extremamente afetuosa. Ideal para ambientes pequenos, ela adora colo, carinho e companhia constante.', 'Fêmea'),
('Simba', 'Gato', 'Persa', 'Pequeno', '+10 anos', 'Simba é um gato persa idoso que ainda conserva sua elegância e carinho. Precisa de escovação frequente e um ambiente tranquilo. Perfeito para quem busca um companheiro calmo e amoroso.', 'Macho'),
('Bela', 'Cachorro', 'Golden Retriever', 'Grande', 'Até 5 anos', 'Bela é uma golden cheia de energia, muito dócil e social. Adora nadar, correr no parque e interagir com pessoas. Ideal para famílias com crianças e casas com quintal.', 'Fêmea'),
('Fred', 'Cachorro', 'Beagle', 'Médio', 'Até 5 anos', 'Fred é um beagle animado, farejador e muito curioso. Gosta de explorar o ambiente e brincar com outros cães. Tem energia de sobra e precisa de estímulo físico e mental.', 'Macho'),
('Nina', 'Cachorro', 'Bulldog Francês', 'Pequeno', '-1 ano', 'Nina é uma filhote de bulldog francês muito divertida e afetuosa. Se adapta bem a apartamentos, ama brincar com brinquedos macios e adora tirar cochilos no sofá.', 'Fêmea'),
('Max', 'Cachorro', 'Boxer', 'Grande', 'Até 10 anos', 'Max é um boxer robusto e brincalhão. Ama correr, pular e interagir com sua família. Precisa de bastante exercício e se dá bem com crianças e adultos.', 'Macho'),
('Lola', 'Gato', 'Maine Coon', 'Médio', 'Até 5 anos', 'Lola é uma gata Maine Coon de pelagem exuberante, muito sociável e inteligente. Gosta de alturas, arranhadores e receber atenção tranquila. É independente, mas afetuosa.', 'Fêmea'),
('Zeca', 'Cachorro', 'SRD', 'Médio', 'Até 5 anos', 'Zeca foi resgatado das ruas e está em busca de um novo lar. É carinhoso, sociável com outros animais e muito grato por qualquer demonstração de carinho.', 'Macho'),
('Julie', 'Cachorro', 'Dachshund', 'Pequeno', 'Até 10 anos', 'Julie é uma salsichinha cheia de personalidade. Adora passear, cavar e ficar próxima do tutor. Ideal para ambientes menores e famílias que gostem de cães carismáticos.', 'Fêmea'),
('Bob', 'Cachorro', 'Border Collie', 'Médio', 'Até 5 anos', 'Bob é extremamente inteligente e ágil. Ama atividades de agilidade, truques e tarefas. Precisa de alguém com tempo e disposição para estimular seu potencial.', 'Macho'),
('Sasha', 'Gato', 'Angorá', 'Pequeno', 'Até 10 anos', 'Sasha é uma gata de pelagem branca sedosa, muito tranquila e discreta. Gosta de ambientes calmos, colo e longas sonecas no sol.', 'Fêmea'),
('Spike', 'Cachorro', 'Doberman', 'Grande', 'Até 10 anos', 'Spike é um doberman treinado para guarda, mas extremamente obediente e educado. Sabe comandos básicos e precisa de alguém com experiência em cães de grande porte.', 'Macho'),
('Tina', 'Cachorro', 'Shih Tzu', 'Pequeno', '-1 ano', 'Tina é uma filhotinha encantadora, cheia de energia e curiosidade. Se dá bem com crianças e precisa de escovação frequente por conta da pelagem.', 'Fêmea'),
('Toby', 'Cachorro', 'Rottweiler', 'Grande', 'Até 10 anos', 'Toby é um rottweiler leal, obediente e muito protetor. Ideal para quem busca segurança com afeto. Treinado e socializado com outros animais.', 'Macho'),
('Amora', 'Gato', 'SRD', 'Pequeno', 'Até 5 anos', 'Amora é uma gata preta linda e muito sociável. Gosta de brincar com fitas, se esconder em caixas e receber carinho nas orelhas.', 'Fêmea'),
('Apollo', 'Cachorro', 'Husky Siberiano', 'Grande', 'Até 5 anos', 'Apollo é enérgico, vocal e muito bonito. Ama correr e brincar na água. Requer espaço e paciência, pois é independente.', 'Macho'),
('Jade', 'Cachorro', 'Cocker Spaniel', 'Médio', 'Até 10 anos', 'Jade é uma cadelinha muito doce, companheira e sociável. Ama passeios e carinho, ideal para quem busca uma amiga de todas as horas.', 'Fêmea'),
('Nick', 'Cachorro', 'Pastor Belga', 'Grande', 'Até 5 anos', 'Nick é ativo, inteligente e obediente. Excelente para atividades ao ar livre e adestramento. Se conecta rapidamente com seu tutor.', 'Macho'),
('Lily', 'Gato', 'Bengal', 'Pequeno', 'Até 5 anos', 'Lily tem pelagem única e comportamento ativo. Gosta de brincar, escalar e interagir com humanos. Perfeita para quem quer um gato mais participativo.', 'Fêmea'),
('Rocky', 'Cachorro', 'SRD', 'Médio', '+10 anos', 'Rocky é um idoso muito carinhoso, ainda gosta de caminhadas leves e cochilos no tapete. Busca um lar tranquilo para viver seus últimos anos com amor.', 'Macho'),
('Pipoca', 'Cachorro', 'Lhasa Apso', 'Pequeno', 'Até 10 anos', 'Pipoca é dócil, companheira e muito charmosa. Gosta de ficar perto do tutor, andar de carro e receber carinho na barriga.', 'Fêmea'),
('Bolt', 'Cachorro', 'Whippet', 'Médio', 'Até 5 anos', 'Bolt é um cão elegante, rápido e muito sociável. Apesar de ativo, é calmo dentro de casa e se dá bem com crianças.', 'Macho'),
('Lulu', 'Cachorro', 'Spitz Alemão', 'Pequeno', '-1 ano', 'Lulu é uma filhote esperta, cheia de energia e que adora chamar atenção. Está aprendendo comandos e precisa de socialização.', 'Fêmea'),
('Marley', 'Cachorro', 'SRD', 'Médio', 'Até 5 anos', 'Marley é brincalhão, obediente e adora correr. Está acostumado a conviver com crianças e outros cães. Muito companheiro.', 'Macho'),
('Cacau', 'Cachorro', 'Pug', 'Pequeno', 'Até 5 anos', 'Cacau é uma cachorrinha simpática, amorosa e muito sociável. Gosta de dormir no colo e acompanhar seu tutor o dia todo.', 'Fêmea'),
('Zeus', 'Cachorro', 'Fila Brasileiro', 'Grande', 'Até 10 anos', 'Zeus é forte, imponente e muito leal à sua família. Ideal para grandes espaços. Requer tutor experiente em raças grandes.', 'Macho'),
('Frida', 'Gato', 'Himalaio', 'Pequeno', 'Até 5 anos', 'Frida é calma, gosta de carinho e ambientes silenciosos. Tem pelagem longa que precisa de escovação frequente.', 'Fêmea'),
('Bruce', 'Cachorro', 'Bulldog Inglês', 'Médio', 'Até 10 anos', 'Bruce é tranquilo, adora cochilar e curte a companhia humana. Ideal para lares calmos e com tempo para mimos.', 'Macho'),
('Margarida', 'Cachorro', 'Yorkshire', 'Pequeno', 'Até 10 anos', 'Margarida é uma cachorrinha delicada, muito afetuosa e ligada ao seu tutor. Ama estar no colo e receber atenção constante.', 'Fêmea');


INSERT INTO EVENTO (TITULO, DESCRICAO, CIDADE, ESTADO, LOCAL_EVENTO) VALUES
('Feira de Adoção de Animais', 'Evento especial para adoção de cães e gatos resgatados. Haverá veterinários disponíveis, apresentações e sorteios de brindes.', 'São Paulo', 'SP', 'Parque Ibirapuera'),
('Corrida Pet', 'Corrida de 2 km onde tutores podem correr com seus cães. Premiações para os melhores tempos e brindes para todos os participantes.', 'Curitiba', 'PR', 'Parque Barigui'),
('Encontro de Gateiros', 'Encontro para amantes de gatos com palestras sobre comportamento felino, feira de produtos e adoções.', 'Porto Alegre', 'RS', 'Centro de Eventos da PUCRS'),
('Festival Vegano Animal', 'Festival gastronômico com foco em culinária vegana e causas animais. Palestras, oficinas e adoção de pets.', 'Belo Horizonte', 'MG', 'Praça da Liberdade'),
('Workshop de Adestramento Canino', 'Curso intensivo de técnicas de adestramento positivo com especialistas renomados. Voltado para tutores e educadores.', 'Brasília', 'DF', 'Espaço Pet do Parque da Cidade'),
('Semana de Bem-Estar Animal', 'Semana com diversas atividades: palestras, oficinas e feiras de adoção, com foco em bem-estar e cuidados veterinários.', 'Recife', 'PE', 'Shopping Recife'),
('Mutirão de Castração', 'Ação social para castração gratuita de cães e gatos de tutores de baixa renda. Vagas limitadas.', 'Salvador', 'BA', 'Universidade Federal da Bahia - Campus Ondina'),
('Arraial Animal', 'Festa junina pet com comidas típicas, concurso de fantasia, música ao vivo e barracas com brindes.', 'Campinas', 'SP', 'Lagoa do Taquaral'),
('Exposição de Cães de Raça', 'Competição oficial da CBKC com cães de várias raças. Avaliações técnicas e premiações para os vencedores.', 'Joinville', 'SC', 'Centro de Convenções Expoville'),
('Cãominhada Solidária', 'Caminhada com cães em prol da arrecadação de ração para ONGs. Atividades físicas e interação social.', 'Natal', 'RN', 'Orla da Praia de Ponta Negra'),
('Feirinha do Bem', 'Feira de adoção com bazar beneficente, produtos artesanais e food trucks. Arrecadação para ONGs locais.', 'Uberlândia', 'MG', 'Praça Clarimundo Carneiro'),
('Dia D Pet', 'Dia inteiro com vacinação, adoção, palestra de adestramento e feira de produtos pet. Gratuito e aberto ao público.', 'Belém', 'PA', 'Estação das Docas'),
('Cinema Pet na Praça', 'Sessão de cinema ao ar livre onde os pets são bem-vindos. Filme temático e área exclusiva para cães.', 'Florianópolis', 'SC', 'Parque da Luz'),
('Maratona Pet', 'Evento esportivo com trilha de obstáculos para cães e tutores. Hidratação, kits e espaço pet friendly.', 'Ribeirão Preto', 'SP', 'Parque Prefeito Luiz Roberto Jábali'),
('Desfile Pet Fashion', 'Desfile de moda pet com premiação para a fantasia mais criativa. Presença de influenciadores pet.', 'Rio de Janeiro', 'RJ', 'Praia de Copacabana'),
('Congresso de Proteção Animal', 'Encontro de ONGs, protetores e autoridades para debater políticas públicas e estratégias de proteção animal.', 'Fortaleza', 'CE', 'Centro de Eventos do Ceará'),
('Pet Talks', 'Série de palestras com veterinários, adestradores e influenciadores sobre cuidados e comportamento animal.', 'Campo Grande', 'MS', 'Auditório do Sesc'),
('Picnic Pet', 'Picnic coletivo para tutores e pets com área verde, brinquedos, sorteios e socialização.', 'São José dos Campos', 'SP', 'Parque Vicentina Aranha'),
('Festival de Adoção Especial', 'Feira de adoção voltada para animais idosos e com deficiência. Adote um pet especial!', 'Maceió', 'AL', 'Shopping Pátio Maceió'),
('Oficina de Brinquedos para Pets', 'Workshop prático de construção de brinquedos interativos com materiais recicláveis. Inclui certificado.', 'Aracaju', 'SE', 'Casa da Cultura'),
('Dia do Gato', 'Comemoração especial com concursos, exposições de gatos de raça e atividades educativas.', 'Cuiabá', 'MT', 'Ginásio Aecim Tocantins'),
('Festival Pet & Kids', 'Evento pet friendly com atrações para crianças, adoção, oficina de pintura facial e teatro.', 'Teresina', 'PI', 'Parque da Cidadania'),
('Virada Animal', 'Evento cultural com apresentações, debates, oficinas e feira vegana. Voltado à causa animal.', 'São Paulo', 'SP', 'Vale do Anhangabaú'),
('Domingo no Parque com Pets', 'Domingo especial com feira de adoção, food trucks, brinquedos para cães e atividades ao ar livre.', 'Niterói', 'RJ', 'Campo de São Bento'),
('Feira Animal Solidária', 'Ação comunitária com atendimento veterinário gratuito, feira de adoção e doação de ração.', 'Vitória', 'ES', 'Praça do Papa'),
('Festa do Adotado', 'Encontro anual de pets adotados com brincadeiras, sorteios e histórias emocionantes de adoção.', 'Santos', 'SP', 'Praça Mauá'),
('Congresso Nacional Pet', 'Congresso para profissionais do setor pet: groomers, veterinários, empreendedores e ONGs.', 'Goiânia', 'GO', 'Centro de Convenções de Goiânia'),
('Adote um Amigo', 'Feira aberta ao público para adoção de animais com barracas de ONGs e atendimento básico.', 'Blumenau', 'SC', 'Vila Germânica'),
('Rock Animal Festival', 'Festival de música ao ar livre com bandas independentes e arrecadação de ração para abrigos.', 'Manaus', 'AM', 'Ponta Negra'),
('Pet no Shopping', 'Ação dentro do shopping com adoção, desfile pet e espaço de interação com marcas pet.', 'João Pessoa', 'PB', 'Manaíra Shopping'),
('Corrida do Bem Pet', 'Corrida com kits personalizados para tutores e pets. Todo o valor arrecadado vai para ONGs.', 'Bauru', 'SP', 'Parque Vitória Régia'),
('Viva Pet', 'Feira completa com estandes de produtos pet, palestras, adoções e desfile de pets adotados.', 'Londrina', 'PR', 'Centro de Exposições Ney Braga'),
('Pet Folia', 'Carnaval pet com concurso de fantasias, trio elétrico e barracas temáticas. Diversão garantida para todos!', 'Olinda', 'PE', 'Praça do Carmo');


INSERT INTO ADM (NOME, EMAIL, TELEFONE, SENHA) VALUES
('Carla Mendes', 'carla.mendes@site.com', '(11) 98888-1234', '12345'),
('João Pedro Ramos', 'joao.ramos@site.com', '(21) 97777-2345', '12345'),
('Fernanda Oliveira', 'fernanda.oliveira@site.com', '(31) 96666-3456', '12345'),
('Lucas Carvalho', 'lucas.carvalho@site.com', '(41) 95555-4567', '12345'),
('Mariana Lima', 'mariana.lima@site.com', '(51) 94444-5678', '12345'),
('Rafael Souza', 'rafael.souza@site.com', '(61) 93333-6789', '12345'),
('Aline Costa', 'aline.costa@site.com', '(71) 92222-7890', '12345'),
('Thiago Martins', 'thiago.martins@site.com', '(81) 91111-8901', '12345'),
('Bruna Rocha', 'bruna.rocha@site.com', '(91) 90000-9012', '12345'),
('Eduardo Pires', 'eduardo.pires@site.com', '(85) 98800-1122', '12345');
