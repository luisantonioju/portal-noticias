<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Nova IA processa dados 10x mais rápido',
                'resumo' => 'Startup anuncia modelo de linguagem revolucionário focado em eficiência energética.',
                'conteudo' => 'A startup NeuralMind apresentou seu novo modelo de IA quântica capaz de reduzir o consumo de energia em 40% enquanto processa dados dez vezes mais rápido que os concorrentes atuais. O foco inicial será o mercado corporativo de grande porte.',
                'imagem' => '/images/news/ia-quantica.jpg',
                'categoria_id' => 1,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => '2026-06-12 10:00:00',
                'updated_at' => '2026-06-12 10:00:00'
            ],
            [
                'titulo' => 'Smartphone dobrável de baixo custo chega ao mercado',
                'resumo' => 'Fabricante asiática quebra o monopólio dos dobráveis premium com modelo intermediário.',
                'conteudo' => 'A TechPhonix lançou globalmente o FlexLite, o primeiro smartphone dobrável a custar menos de 300 dólares. O aparelho conta com tela AMOLED de 6.7 polegadas e processador intermediário de última geração, democratizando o acesso à tecnologia de telas flexíveis.',
                'imagem' => '/images/news/flexlite-smartphone.jpg',
                'categoria_id' => 2,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => '2026-06-11 14:30:00',
                'updated_at' => '2026-06-12 09:15:00'
            ],
            [
                'titulo' => 'Mega ataque cibernético afeta serviços de nuvem',
                'resumo' => 'Grupo de hackers explora vulnerabilidade zero-day e derruba plataformas globais.',
                'conteudo' => 'Um ataque de negação de serviço (DDoS) em larga escala deixou diversos serviços financeiros fora do ar na manhã desta quinta-feira. Especialistas apontam que a falha ocorreu em um provedor de infraestrutura crítica de nuvem. A correção já está sendo implementada.',
                'imagem' => '/images/news/cyber-attack.jpg',
                'categoria_id' => 3,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => '2026-06-12 08:00:00',
                'updated_at' => '2026-06-12 11:45:00'
            ],
            [
                'titulo' => 'Console portátil de nova geração é anunciado',
                'resumo' => 'Dispositivo promete rodar jogos de PC em resolução 4K nativa via streaming adaptativo.',
                'conteudo' => 'A PlayGrid revelou seu novo console portátil, o GridStream Pro. O grande diferencial do ecossistema é a integração com redes 6G e um algoritmo proprietário de upscaling que promete latência zero e resolução 4K mesmo em conexões instáveis.',
                'imagem' => '/images/news/gridstream-pro.jpg',
                'categoria_id' => 4,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => '2026-06-10 18:20:00',
                'updated_at' => '2026-06-10 18:20:00'
            ],
            [
                'titulo' => 'Baterias de Grafeno entram em produção em massa',
                'resumo' => 'Nova tecnologia promete carregar carros elétricos e notebooks em menos de 5 minutos.',
                'conteudo' => 'Após anos de testes em laboratório, a GigaVolt iniciou a produção industrial de células de bateria baseadas em grafeno. A novidade promete revolucionar a autonomia de eletrônicos e veículos, triplicando a vida útil das baterias tradicionais de lítio.',
                'imagem' => '/images/news/grafeno-baterias.jpg',
                'categoria_id' => 5,
                'usuario_id' => 1,
                'ativo' => 1,
                'created_at' => '2026-06-12 15:00:00',
                'updated_at' => '2026-06-12 15:00:00'
            ]
        ]);
    }
}
