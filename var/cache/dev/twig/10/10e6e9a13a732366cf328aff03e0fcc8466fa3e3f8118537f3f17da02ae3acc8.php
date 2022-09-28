<?php

/* AdminBundle:CtSourceEnergie:index.html.twig */
class __TwigTemplate_d4ca5a0dbc247ed140043b674495a0e93f9da8b85df2b094b307d326e887910e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtSourceEnergie:index.html.twig", 1);
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
        $__internal_4c011729589decdb9d0a123de1fd178697a6c4e5020ce2a5b8b64dc36c7a35a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c011729589decdb9d0a123de1fd178697a6c4e5020ce2a5b8b64dc36c7a35a1->enter($__internal_4c011729589decdb9d0a123de1fd178697a6c4e5020ce2a5b8b64dc36c7a35a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:index.html.twig"));

        $__internal_cbabc8dfea79e0e6d630566738cde037cf2e9a2285aacae0d295704792d673ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbabc8dfea79e0e6d630566738cde037cf2e9a2285aacae0d295704792d673ab->enter($__internal_cbabc8dfea79e0e6d630566738cde037cf2e9a2285aacae0d295704792d673ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:index.html.twig"));

        // line 5
        $context["menu_energie"] = true;
        // line 6
        $context["menu_energie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c011729589decdb9d0a123de1fd178697a6c4e5020ce2a5b8b64dc36c7a35a1->leave($__internal_4c011729589decdb9d0a123de1fd178697a6c4e5020ce2a5b8b64dc36c7a35a1_prof);

        
        $__internal_cbabc8dfea79e0e6d630566738cde037cf2e9a2285aacae0d295704792d673ab->leave($__internal_cbabc8dfea79e0e6d630566738cde037cf2e9a2285aacae0d295704792d673ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49705305102d823ca0ec1301c0fd008569db40c7826700ff9b2277bc423628f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49705305102d823ca0ec1301c0fd008569db40c7826700ff9b2277bc423628f->enter($__internal_f49705305102d823ca0ec1301c0fd008569db40c7826700ff9b2277bc423628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11d73acb25218418203800c43ae56ad65cf01036f8bc263c5693ca24653374e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d73acb25218418203800c43ae56ad65cf01036f8bc263c5693ca24653374e9->enter($__internal_11d73acb25218418203800c43ae56ad65cf01036f8bc263c5693ca24653374e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des energies ";
        
        $__internal_11d73acb25218418203800c43ae56ad65cf01036f8bc263c5693ca24653374e9->leave($__internal_11d73acb25218418203800c43ae56ad65cf01036f8bc263c5693ca24653374e9_prof);

        
        $__internal_f49705305102d823ca0ec1301c0fd008569db40c7826700ff9b2277bc423628f->leave($__internal_f49705305102d823ca0ec1301c0fd008569db40c7826700ff9b2277bc423628f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0481e89422f8263b80bc0ee354e6d4c29751f113092f280910173d0b2bd6a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0481e89422f8263b80bc0ee354e6d4c29751f113092f280910173d0b2bd6a85->enter($__internal_e0481e89422f8263b80bc0ee354e6d4c29751f113092f280910173d0b2bd6a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b5c9aaa2555521d768fbb18c555cebda86ed48b05374a6538a1e6d6d555f255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5c9aaa2555521d768fbb18c555cebda86ed48b05374a6538a1e6d6d555f255->enter($__internal_7b5c9aaa2555521d768fbb18c555cebda86ed48b05374a6538a1e6d6d555f255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une energie
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-energie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["energies"] ?? $this->getContext($context, "energies")));
        foreach ($context['_seq'] as $context["_key"] => $context["energie"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["energie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["energie"], "sreLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_edit", array("id" => $this->getAttribute($context["energie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_delete", array("id" => $this->getAttribute($context["energie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['energie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
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
        
        $__internal_7b5c9aaa2555521d768fbb18c555cebda86ed48b05374a6538a1e6d6d555f255->leave($__internal_7b5c9aaa2555521d768fbb18c555cebda86ed48b05374a6538a1e6d6d555f255_prof);

        
        $__internal_e0481e89422f8263b80bc0ee354e6d4c29751f113092f280910173d0b2bd6a85->leave($__internal_e0481e89422f8263b80bc0ee354e6d4c29751f113092f280910173d0b2bd6a85_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7cd34971d5f62fcabdc65f6adfde2baa8a5c58f9483209cad07d85b29a2bed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cd34971d5f62fcabdc65f6adfde2baa8a5c58f9483209cad07d85b29a2bed0->enter($__internal_c7cd34971d5f62fcabdc65f6adfde2baa8a5c58f9483209cad07d85b29a2bed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_40696058de7e8a41917cefa1db977dc3313dc626ba517d90fa5148667065eb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40696058de7e8a41917cefa1db977dc3313dc626ba517d90fa5148667065eb16->enter($__internal_40696058de7e8a41917cefa1db977dc3313dc626ba517d90fa5148667065eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-energie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune energie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_40696058de7e8a41917cefa1db977dc3313dc626ba517d90fa5148667065eb16->leave($__internal_40696058de7e8a41917cefa1db977dc3313dc626ba517d90fa5148667065eb16_prof);

        
        $__internal_c7cd34971d5f62fcabdc65f6adfde2baa8a5c58f9483209cad07d85b29a2bed0->leave($__internal_c7cd34971d5f62fcabdc65f6adfde2baa8a5c58f9483209cad07d85b29a2bed0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtSourceEnergie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des energies {% endblock %}

{% set menu_energie      = true %}
{% set menu_energie_list = true %}

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
                    <a href=\"{{ path('energie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une energie
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('energie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-energie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for energie in energies %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ energie.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ energie.sreLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('energie_edit', { 'id': energie.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('energie_delete', { 'id': energie.id }) }}\">
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
            \$('#list-energie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune energie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtSourceEnergie:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtSourceEnergie/index.html.twig");
    }
}
