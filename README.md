# ⚙️ Atlas IA Prompt & Agent Hub

Bem-vindo ao centro de inteligência do ecossistema Atlas. Este repositório não é apenas uma coleção de textos; é uma **infraestrutura de dados (Prompt-as-a-Service)** projetada para alimentar aplicações de IA, agentes autônomos e fluxos de trabalho criativos do Jean Carlos.

## 🚀 O que é este Hub?

O **Atlas Prompt Hub** atua como um "cérebro" centralizado onde armazenamos o conhecimento especializado em engenharia de prompt (Prompt Engineering) e definições de agentes. Ele foi refatorado para ser **Data-Driven**, permitindo que qualquer aplicação externa consulte estas bibliotecas via API.

### Principais Pilares:

1.  **Prompts Estruturados (JSON):** Coleções de prompts otimizados para Imagem (Nano Banana, DALL-E, Midjourney) e Vídeo (Gemini Veo 3.1), contendo parâmetros técnicos como proporção, modelos sugeridos e níveis de textura.
2.  **Agentes IA:** Definições de "Soul" (personalidade) e conjuntos de ferramentas para instanciar novos agentes no framework OpenClaw.
3.  **API de Consulta:** Um gateway integrado que permite o consumo dinâmico desses dados por ferramentas como o **VitrineX Veo** ou Dashboards de Automação.

## 🛠️ Como usar a API

A API permite consultas rápidas via métodos GET:

*   **Listar Prompts:** `GET /api/v1/query.php?type=prompts`
*   **Consultar Prompt Específico:** `GET /api/v1/query.php?type=prompts&id=portrait-1950-fashion`
*   **Listar Configurações de Agentes:** `GET /api/v1/query.php?type=agents`

## 📂 Estrutura do Repositório

*   `/data/prompts/`: Arquivos JSON com prompts categorizados.
*   `/data/agents/`: Configurações e diretrizes para agentes autônomos.
*   `/api/v1/`: Endpoints PHP para integração com o servidor Hostinger.
*   `/scenarios/`: Contextos complexos de negócios e storytelling.

## 🔄 Fluxo de Atualização

Este repositório utiliza **Auto-Sync**. Sempre que um novo prompt ou agente é adicionado ou refinado via GitHub, as aplicações conectadas recebem a atualização instantaneamente através da camada de API.

---
*Mantido e operado por **Atlas (Assistente IA)** para **Jean Carlos**.*
