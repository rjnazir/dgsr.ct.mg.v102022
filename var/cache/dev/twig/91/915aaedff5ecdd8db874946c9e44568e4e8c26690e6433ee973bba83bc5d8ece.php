<?php

/* @Admin/CtTypeReception/index.html.twig */
class __TwigTemplate_5d4354d376abb0a2c960986b4a7a11974ad38f754c830c51826f7da4f907eb23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeReception/index.html.twig", 1);
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
        $__internal_7ac877ae2c523233110450f983684fefcb476410e5229403970bb55c46bc47ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac877ae2c523233110450f983684fefcb476410e5229403970bb55c46bc47ea->enter($__internal_7ac877ae2c523233110450f983684fefcb476410e5229403970bb55c46bc47ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/index.html.twig"));

        $__internal_eaf49b25cd515101fd4b490123f71486223d0ab8855fab8e12f377a7435064fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf49b25cd515101fd4b490123f71486223d0ab8855fab8e12f377a7435064fc->enter($__internal_eaf49b25cd515101fd4b490123f71486223d0ab8855fab8e12f377a7435064fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/index.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_type_reception"] = true;
        // line 7
        $context["menu_type_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac877ae2c523233110450f983684fefcb476410e5229403970bb55c46bc47ea->leave($__internal_7ac877ae2c523233110450f983684fefcb476410e5229403970bb55c46bc47ea_prof);

        
        $__internal_eaf49b25cd515101fd4b490123f71486223d0ab8855fab8e12f377a7435064fc->leave($__internal_eaf49b25cd515101fd4b490123f71486223d0ab8855fab8e12f377a7435064fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_269c70b2317173b2d0b450c1f2adb1efbc7b0e66dea93fbee8e61bd0427a0e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269c70b2317173b2d0b450c1f2adb1efbc7b0e66dea93fbee8e61bd0427a0e1b->enter($__internal_269c70b2317173b2d0b450c1f2adb1efbc7b0e66dea93fbee8e61bd0427a0e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_725212e8ef0401c53cbc5e6a891029eb450253ea41a90b93df6f6f50ad9ca4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725212e8ef0401c53cbc5e6a891029eb450253ea41a90b93df6f6f50ad9ca4f8->enter($__internal_725212e8ef0401c53cbc5e6a891029eb450253ea41a90b93df6f6f50ad9ca4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des type_receptions ";
        
        $__internal_725212e8ef0401c53cbc5e6a891029eb450253ea41a90b93df6f6f50ad9ca4f8->leave($__internal_725212e8ef0401c53cbc5e6a891029eb450253ea41a90b93df6f6f50ad9ca4f8_prof);

        
        $__internal_269c70b2317173b2d0b450c1f2adb1efbc7b0e66dea93fbee8e61bd0427a0e1b->leave($__internal_269c70b2317173b2d0b450c1f2adb1efbc7b0e66dea93fbee8e61bd0427a0e1b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23549fd157c8915d587c501ac1d07e9120130461a4d7a5331d1b43c8afb7834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23549fd157c8915d587c501ac1d07e9120130461a4d7a5331d1b43c8afb7834->enter($__internal_b23549fd157c8915d587c501ac1d07e9120130461a4d7a5331d1b43c8afb7834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b1ea8cb767877be00192ac16769c2d4c1dc137d8bd743e49ab273af82534534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1ea8cb767877be00192ac16769c2d4c1dc137d8bd743e49ab273af82534534->enter($__internal_1b1ea8cb767877be00192ac16769c2d4c1dc137d8bd743e49ab273af82534534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? $this->getContext($context, "type_receptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_reception"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "tprcpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_edit", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_reception'], $context['_parent'], $context['loop']);
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
        
        $__internal_1b1ea8cb767877be00192ac16769c2d4c1dc137d8bd743e49ab273af82534534->leave($__internal_1b1ea8cb767877be00192ac16769c2d4c1dc137d8bd743e49ab273af82534534_prof);

        
        $__internal_b23549fd157c8915d587c501ac1d07e9120130461a4d7a5331d1b43c8afb7834->leave($__internal_b23549fd157c8915d587c501ac1d07e9120130461a4d7a5331d1b43c8afb7834_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efed44173052c9a8e88fd0a0e169e361ae7e35ea4f08a48172d8bb0fe5ed7478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efed44173052c9a8e88fd0a0e169e361ae7e35ea4f08a48172d8bb0fe5ed7478->enter($__internal_efed44173052c9a8e88fd0a0e169e361ae7e35ea4f08a48172d8bb0fe5ed7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f964a52ed88f9b854ff1022a6232d3e1391eecc1b2d3f5f83beb929ba7c045a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f964a52ed88f9b854ff1022a6232d3e1391eecc1b2d3f5f83beb929ba7c045a->enter($__internal_4f964a52ed88f9b854ff1022a6232d3e1391eecc1b2d3f5f83beb929ba7c045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_4f964a52ed88f9b854ff1022a6232d3e1391eecc1b2d3f5f83beb929ba7c045a->leave($__internal_4f964a52ed88f9b854ff1022a6232d3e1391eecc1b2d3f5f83beb929ba7c045a_prof);

        
        $__internal_efed44173052c9a8e88fd0a0e169e361ae7e35ea4f08a48172d8bb0fe5ed7478->leave($__internal_efed44173052c9a8e88fd0a0e169e361ae7e35ea4f08a48172d8bb0fe5ed7478_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeReception/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 92,  235 => 91,  214 => 78,  209 => 74,  197 => 68,  190 => 64,  184 => 61,  179 => 59,  175 => 57,  171 => 56,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des type_receptions {% endblock %}

{% set menu_reception           = true %}
{% set menu_type_reception      = true %}
{% set menu_type_reception_list = true %}

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
                    <a href=\"{{ path('type_reception_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_reception_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_reception in type_receptions %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_reception.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_reception.tprcpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_reception_edit', { 'id': type_reception.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_reception_delete', { 'id': type_reception.id }) }}\">
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
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtTypeReception/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeReception\\index.html.twig");
    }
}
