<?php

/* AdminBundle:CtVisiteExtraTarif:index.html.twig */
class __TwigTemplate_a406e5397ecd0ea065e203e8baa5436f9ea1d4aeb834720b50ee7974d70bfe75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtraTarif:index.html.twig", 1);
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
        $__internal_f299b2279c89a225ce61fe2f7e9c2a6ed196141cbe7f1f064bfef1552736fb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f299b2279c89a225ce61fe2f7e9c2a6ed196141cbe7f1f064bfef1552736fb3e->enter($__internal_f299b2279c89a225ce61fe2f7e9c2a6ed196141cbe7f1f064bfef1552736fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:index.html.twig"));

        $__internal_9a407f3df01c9787733dac85280cb33001296b3eb5f9ce408dc45ee7e41af87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a407f3df01c9787733dac85280cb33001296b3eb5f9ce408dc45ee7e41af87e->enter($__internal_9a407f3df01c9787733dac85280cb33001296b3eb5f9ce408dc45ee7e41af87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:index.html.twig"));

        // line 5
        $context["menu_visite_extra"] = true;
        // line 6
        $context["menu_visite_extra_tarif"] = true;
        // line 7
        $context["menu_visite_extra_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f299b2279c89a225ce61fe2f7e9c2a6ed196141cbe7f1f064bfef1552736fb3e->leave($__internal_f299b2279c89a225ce61fe2f7e9c2a6ed196141cbe7f1f064bfef1552736fb3e_prof);

        
        $__internal_9a407f3df01c9787733dac85280cb33001296b3eb5f9ce408dc45ee7e41af87e->leave($__internal_9a407f3df01c9787733dac85280cb33001296b3eb5f9ce408dc45ee7e41af87e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a64a40d427b3bde27d36a5e5a2bf05cac5aa8a6bd44fb7b415f7718a48b3f180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64a40d427b3bde27d36a5e5a2bf05cac5aa8a6bd44fb7b415f7718a48b3f180->enter($__internal_a64a40d427b3bde27d36a5e5a2bf05cac5aa8a6bd44fb7b415f7718a48b3f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c69b3d829f2db210a672244d147345fb87408f06c8e41ec884dd8bb837070e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69b3d829f2db210a672244d147345fb87408f06c8e41ec884dd8bb837070e84->enter($__internal_c69b3d829f2db210a672244d147345fb87408f06c8e41ec884dd8bb837070e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des visite_extras ";
        
        $__internal_c69b3d829f2db210a672244d147345fb87408f06c8e41ec884dd8bb837070e84->leave($__internal_c69b3d829f2db210a672244d147345fb87408f06c8e41ec884dd8bb837070e84_prof);

        
        $__internal_a64a40d427b3bde27d36a5e5a2bf05cac5aa8a6bd44fb7b415f7718a48b3f180->leave($__internal_a64a40d427b3bde27d36a5e5a2bf05cac5aa8a6bd44fb7b415f7718a48b3f180_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca54c87e50cf42c3f70c55fb63e44f6acce1d61abf6a65e14bfc118a2c3563bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca54c87e50cf42c3f70c55fb63e44f6acce1d61abf6a65e14bfc118a2c3563bb->enter($__internal_ca54c87e50cf42c3f70c55fb63e44f6acce1d61abf6a65e14bfc118a2c3563bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc6325f8ed21c65c25d151114b7550179c68e17dc18fea3e9f80b77cfd755d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6325f8ed21c65c25d151114b7550179c68e17dc18fea3e9f80b77cfd755d27->enter($__internal_fc6325f8ed21c65c25d151114b7550179c68e17dc18fea3e9f80b77cfd755d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 23
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        // line 38
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du visite extra
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visite_extras"] ?? $this->getContext($context, "visite_extras")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite_extra"]) {
            // line 61
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "vsteLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 67
            if ($this->getAttribute($context["visite_extra"], "vetPrix", array(), "any", true, true)) {
                // line 68
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "vetPrix", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 70
            echo "                                    </td>
                                    <td>
                                        ";
            // line 72
            if ($this->getAttribute($context["visite_extra"], "vetAnnee", array(), "any", true, true)) {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "vetAnnee", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_edit", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_delete", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite_extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </tbody>
                        </table>

                        ";
        // line 92
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
        
        $__internal_fc6325f8ed21c65c25d151114b7550179c68e17dc18fea3e9f80b77cfd755d27->leave($__internal_fc6325f8ed21c65c25d151114b7550179c68e17dc18fea3e9f80b77cfd755d27_prof);

        
        $__internal_ca54c87e50cf42c3f70c55fb63e44f6acce1d61abf6a65e14bfc118a2c3563bb->leave($__internal_ca54c87e50cf42c3f70c55fb63e44f6acce1d61abf6a65e14bfc118a2c3563bb_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5052a56c505bc4adf7fa05ab019b536d964f49275335e5bc2fe0a4c0ec67fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5052a56c505bc4adf7fa05ab019b536d964f49275335e5bc2fe0a4c0ec67fb6->enter($__internal_f5052a56c505bc4adf7fa05ab019b536d964f49275335e5bc2fe0a4c0ec67fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_06abee4432d821c97ebcdb88183d11dbd861c750207953ffc41c3511e8f1bd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06abee4432d821c97ebcdb88183d11dbd861c750207953ffc41c3511e8f1bd75->enter($__internal_06abee4432d821c97ebcdb88183d11dbd861c750207953ffc41c3511e8f1bd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-visite_extra').DataTable(
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_06abee4432d821c97ebcdb88183d11dbd861c750207953ffc41c3511e8f1bd75->leave($__internal_06abee4432d821c97ebcdb88183d11dbd861c750207953ffc41c3511e8f1bd75_prof);

        
        $__internal_f5052a56c505bc4adf7fa05ab019b536d964f49275335e5bc2fe0a4c0ec67fb6->leave($__internal_f5052a56c505bc4adf7fa05ab019b536d964f49275335e5bc2fe0a4c0ec67fb6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtraTarif:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 106,  262 => 105,  241 => 92,  236 => 88,  224 => 82,  217 => 78,  212 => 75,  206 => 73,  204 => 72,  200 => 70,  194 => 68,  192 => 67,  187 => 65,  182 => 63,  178 => 61,  174 => 60,  158 => 47,  147 => 39,  144 => 38,  132 => 27,  123 => 24,  118 => 23,  114 => 22,  111 => 21,  102 => 18,  99 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  68 => 10,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des visite_extras {% endblock %}

{% set menu_visite_extra            = true %}
{% set menu_visite_extra_tarif      = true %}
{% set menu_visite_extra_tarif_list = true %}


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
                    <a href=\"{{ path('visite_extra_tarif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du visite extra
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('visite_extra_tarif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for visite_extra in visite_extras %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ visite_extra.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ visite_extra.vsteLibelle }}</td>
                                    <td>
                                        {% if visite_extra.vetPrix is defined %}
                                            {{ visite_extra.vetPrix }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if visite_extra.vetAnnee is defined %}
                                            {{ visite_extra.vetAnnee }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('visite_extra_tarif_edit', { 'id': visite_extra.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('visite_extra_tarif_delete', { 'id': visite_extra.id }) }}\">
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
            \$('#list-visite_extra').DataTable(
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtVisiteExtraTarif:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtraTarif/index.html.twig");
    }
}
