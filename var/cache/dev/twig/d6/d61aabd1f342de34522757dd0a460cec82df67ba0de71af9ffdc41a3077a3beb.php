<?php

/* AdminBundle:CtGenre:index.html.twig */
class __TwigTemplate_491962e4bf66a9045ec8218b11c0f6b789e217408002f04669258554f1c877ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenre:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc9f461a06ac096cc19958995e65344278d228f2f710d34c4d1ed9be1b5a58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc9f461a06ac096cc19958995e65344278d228f2f710d34c4d1ed9be1b5a58c->enter($__internal_2dc9f461a06ac096cc19958995e65344278d228f2f710d34c4d1ed9be1b5a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:index.html.twig"));

        $__internal_d3b81cd8a4c6685ebbc68dc014ad042bf1097f340125d79d5c629cc73c18d0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b81cd8a4c6685ebbc68dc014ad042bf1097f340125d79d5c629cc73c18d0c8->enter($__internal_d3b81cd8a4c6685ebbc68dc014ad042bf1097f340125d79d5c629cc73c18d0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:index.html.twig"));

        // line 5
        $context["menu_genre"] = true;
        // line 6
        $context["menu_genre_type"] = true;
        // line 7
        $context["menu_genre_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc9f461a06ac096cc19958995e65344278d228f2f710d34c4d1ed9be1b5a58c->leave($__internal_2dc9f461a06ac096cc19958995e65344278d228f2f710d34c4d1ed9be1b5a58c_prof);

        
        $__internal_d3b81cd8a4c6685ebbc68dc014ad042bf1097f340125d79d5c629cc73c18d0c8->leave($__internal_d3b81cd8a4c6685ebbc68dc014ad042bf1097f340125d79d5c629cc73c18d0c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae12559911393c0e0f998726f5b1237254ea45ec9c803903080b3ec1f8b4800e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae12559911393c0e0f998726f5b1237254ea45ec9c803903080b3ec1f8b4800e->enter($__internal_ae12559911393c0e0f998726f5b1237254ea45ec9c803903080b3ec1f8b4800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a6ca54a8a4c4ae3bb9b9ec7a6297c4d72cd8ca7b8fb352f26625f0451ea9407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6ca54a8a4c4ae3bb9b9ec7a6297c4d72cd8ca7b8fb352f26625f0451ea9407->enter($__internal_9a6ca54a8a4c4ae3bb9b9ec7a6297c4d72cd8ca7b8fb352f26625f0451ea9407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des genres ";
        
        $__internal_9a6ca54a8a4c4ae3bb9b9ec7a6297c4d72cd8ca7b8fb352f26625f0451ea9407->leave($__internal_9a6ca54a8a4c4ae3bb9b9ec7a6297c4d72cd8ca7b8fb352f26625f0451ea9407_prof);

        
        $__internal_ae12559911393c0e0f998726f5b1237254ea45ec9c803903080b3ec1f8b4800e->leave($__internal_ae12559911393c0e0f998726f5b1237254ea45ec9c803903080b3ec1f8b4800e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5c8ade51ae8f81a7c770115edf077ebf0240bc79f0ed8fd26db86cd780c8df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c8ade51ae8f81a7c770115edf077ebf0240bc79f0ed8fd26db86cd780c8df0->enter($__internal_c5c8ade51ae8f81a7c770115edf077ebf0240bc79f0ed8fd26db86cd780c8df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0933027a401e8a12505b3adc11c996f99ab684410bf6d5c8b1cafde71af3614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0933027a401e8a12505b3adc11c996f99ab684410bf6d5c8b1cafde71af3614e->enter($__internal_0933027a401e8a12505b3adc11c996f99ab684410bf6d5c8b1cafde71af3614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un genre
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Categorie</th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 60
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            ";
            // line 65
            if ($this->getAttribute($context["genre"], "ctGenreCategorie", array())) {
                // line 66
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["genre"], "ctGenreCategorie", array()), "gcLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 68
            echo "                                        </td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_edit", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_delete", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        </table>

                        ";
        // line 87
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_0933027a401e8a12505b3adc11c996f99ab684410bf6d5c8b1cafde71af3614e->leave($__internal_0933027a401e8a12505b3adc11c996f99ab684410bf6d5c8b1cafde71af3614e_prof);

        
        $__internal_c5c8ade51ae8f81a7c770115edf077ebf0240bc79f0ed8fd26db86cd780c8df0->leave($__internal_c5c8ade51ae8f81a7c770115edf077ebf0240bc79f0ed8fd26db86cd780c8df0_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e45688cb4bcfdc1f0b3635f7d3674e91bd1d0a5223fea16c447b8da4f8b50d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45688cb4bcfdc1f0b3635f7d3674e91bd1d0a5223fea16c447b8da4f8b50d0f->enter($__internal_e45688cb4bcfdc1f0b3635f7d3674e91bd1d0a5223fea16c447b8da4f8b50d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d79e7ea34d18ce655a79a9a76306e932c3e7cbb6a4298f8c70ed578ac9b06f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d79e7ea34d18ce655a79a9a76306e932c3e7cbb6a4298f8c70ed578ac9b06f9->enter($__internal_4d79e7ea34d18ce655a79a9a76306e932c3e7cbb6a4298f8c70ed578ac9b06f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_4d79e7ea34d18ce655a79a9a76306e932c3e7cbb6a4298f8c70ed578ac9b06f9->leave($__internal_4d79e7ea34d18ce655a79a9a76306e932c3e7cbb6a4298f8c70ed578ac9b06f9_prof);

        
        $__internal_e45688cb4bcfdc1f0b3635f7d3674e91bd1d0a5223fea16c447b8da4f8b50d0f->leave($__internal_e45688cb4bcfdc1f0b3635f7d3674e91bd1d0a5223fea16c447b8da4f8b50d0f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 101,  254 => 100,  233 => 87,  228 => 83,  216 => 77,  209 => 73,  203 => 70,  199 => 69,  196 => 68,  190 => 66,  188 => 65,  182 => 62,  178 => 60,  174 => 59,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des genres {% endblock %}

{% set menu_genre           = true %}
{% set menu_genre_type      = true %}
{% set menu_genre_type_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('genre_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un genre
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('genre_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Categorie</th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for genre in genres %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ genre.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            {% if genre.ctGenreCategorie %}
                                                {{ genre.ctGenreCategorie.gcLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>{{ genre.grLibelle }}</td>
                                        <td>{{ genre.grCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('genre_edit', { 'id': genre.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('genre_delete', { 'id': genre.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtGenre:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenre/index.html.twig");
    }
}
