<?php

/* @Admin/CtVisiteExtraTarif/index.html.twig */
class __TwigTemplate_fee59c395c6fd84d8b67064fce0714c63e5be103acd553e24e6eb151eb3ec891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/index.html.twig", 1);
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
        $__internal_c6b31b0e66ecb4032a39ab747c8abd481748d2ed04ec53990943e4be60727d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b31b0e66ecb4032a39ab747c8abd481748d2ed04ec53990943e4be60727d91->enter($__internal_c6b31b0e66ecb4032a39ab747c8abd481748d2ed04ec53990943e4be60727d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/index.html.twig"));

        $__internal_3f52a5a989b436cbeb06072a92a3ee25f934fc87e3cc0a253be18a6b3be11bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f52a5a989b436cbeb06072a92a3ee25f934fc87e3cc0a253be18a6b3be11bc2->enter($__internal_3f52a5a989b436cbeb06072a92a3ee25f934fc87e3cc0a253be18a6b3be11bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/index.html.twig"));

        // line 5
        $context["menu_visite_extra"] = true;
        // line 6
        $context["menu_visite_extra_tarif"] = true;
        // line 7
        $context["menu_visite_extra_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b31b0e66ecb4032a39ab747c8abd481748d2ed04ec53990943e4be60727d91->leave($__internal_c6b31b0e66ecb4032a39ab747c8abd481748d2ed04ec53990943e4be60727d91_prof);

        
        $__internal_3f52a5a989b436cbeb06072a92a3ee25f934fc87e3cc0a253be18a6b3be11bc2->leave($__internal_3f52a5a989b436cbeb06072a92a3ee25f934fc87e3cc0a253be18a6b3be11bc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_471aee1937163e068cb2f66563aef5794875fb39e5769c48d7cb25071a0d5223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471aee1937163e068cb2f66563aef5794875fb39e5769c48d7cb25071a0d5223->enter($__internal_471aee1937163e068cb2f66563aef5794875fb39e5769c48d7cb25071a0d5223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b665cf83aec581f642a2710ec777813ac1c0a4dd163999027d36fb6357fb4cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b665cf83aec581f642a2710ec777813ac1c0a4dd163999027d36fb6357fb4cc8->enter($__internal_b665cf83aec581f642a2710ec777813ac1c0a4dd163999027d36fb6357fb4cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des visite_extras ";
        
        $__internal_b665cf83aec581f642a2710ec777813ac1c0a4dd163999027d36fb6357fb4cc8->leave($__internal_b665cf83aec581f642a2710ec777813ac1c0a4dd163999027d36fb6357fb4cc8_prof);

        
        $__internal_471aee1937163e068cb2f66563aef5794875fb39e5769c48d7cb25071a0d5223->leave($__internal_471aee1937163e068cb2f66563aef5794875fb39e5769c48d7cb25071a0d5223_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a35203c89185dfd07e80d91f2547b2be747dc1a1b1d9c5bf7c8e1738de8d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a35203c89185dfd07e80d91f2547b2be747dc1a1b1d9c5bf7c8e1738de8d6c->enter($__internal_90a35203c89185dfd07e80d91f2547b2be747dc1a1b1d9c5bf7c8e1738de8d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f14fb61096138b67371981b49ab9f5819b1de15589c2a78580b1e841491271d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f14fb61096138b67371981b49ab9f5819b1de15589c2a78580b1e841491271d->enter($__internal_7f14fb61096138b67371981b49ab9f5819b1de15589c2a78580b1e841491271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f14fb61096138b67371981b49ab9f5819b1de15589c2a78580b1e841491271d->leave($__internal_7f14fb61096138b67371981b49ab9f5819b1de15589c2a78580b1e841491271d_prof);

        
        $__internal_90a35203c89185dfd07e80d91f2547b2be747dc1a1b1d9c5bf7c8e1738de8d6c->leave($__internal_90a35203c89185dfd07e80d91f2547b2be747dc1a1b1d9c5bf7c8e1738de8d6c_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bd034ae9e3d4a93fb17dbee88b06e2da4dfb94aa610b7c2ea46fb899e7b9692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd034ae9e3d4a93fb17dbee88b06e2da4dfb94aa610b7c2ea46fb899e7b9692->enter($__internal_1bd034ae9e3d4a93fb17dbee88b06e2da4dfb94aa610b7c2ea46fb899e7b9692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_918304f273971c21efa8c77f4f1fda4decf73612b890a4513ca1d9584b824c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918304f273971c21efa8c77f4f1fda4decf73612b890a4513ca1d9584b824c51->enter($__internal_918304f273971c21efa8c77f4f1fda4decf73612b890a4513ca1d9584b824c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_918304f273971c21efa8c77f4f1fda4decf73612b890a4513ca1d9584b824c51->leave($__internal_918304f273971c21efa8c77f4f1fda4decf73612b890a4513ca1d9584b824c51_prof);

        
        $__internal_1bd034ae9e3d4a93fb17dbee88b06e2da4dfb94aa610b7c2ea46fb899e7b9692->leave($__internal_1bd034ae9e3d4a93fb17dbee88b06e2da4dfb94aa610b7c2ea46fb899e7b9692_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/index.html.twig";
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
", "@Admin/CtVisiteExtraTarif/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\index.html.twig");
    }
}
