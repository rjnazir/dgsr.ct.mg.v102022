<?php

/* @Admin/CtBordereau/index.html.twig */
class __TwigTemplate_bc82e30e07ab1f99ef7637d6fcae99fa03a4380dd027959523a036e071088efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtBordereau/index.html.twig", 1);
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
        $__internal_efa81b3ae24f7733f3eb4462909ff71721b746f2c61b9051efa69ec56a2ef931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa81b3ae24f7733f3eb4462909ff71721b746f2c61b9051efa69ec56a2ef931->enter($__internal_efa81b3ae24f7733f3eb4462909ff71721b746f2c61b9051efa69ec56a2ef931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/index.html.twig"));

        $__internal_5fcbd4a28de771bd9e5bd21ab004c936a49962dd89e41f9a30bfc8bda596a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcbd4a28de771bd9e5bd21ab004c936a49962dd89e41f9a30bfc8bda596a325->enter($__internal_5fcbd4a28de771bd9e5bd21ab004c936a49962dd89e41f9a30bfc8bda596a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/index.html.twig"));

        // line 5
        $context["menu_bordereau"] = true;
        // line 6
        $context["menu_bordereau_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa81b3ae24f7733f3eb4462909ff71721b746f2c61b9051efa69ec56a2ef931->leave($__internal_efa81b3ae24f7733f3eb4462909ff71721b746f2c61b9051efa69ec56a2ef931_prof);

        
        $__internal_5fcbd4a28de771bd9e5bd21ab004c936a49962dd89e41f9a30bfc8bda596a325->leave($__internal_5fcbd4a28de771bd9e5bd21ab004c936a49962dd89e41f9a30bfc8bda596a325_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e03a5ea832d7dbbf9221785f36c2025d5a8c817649cbe66128ba5f947806dc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03a5ea832d7dbbf9221785f36c2025d5a8c817649cbe66128ba5f947806dc3d->enter($__internal_e03a5ea832d7dbbf9221785f36c2025d5a8c817649cbe66128ba5f947806dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_173376c798cf52c4c0477291a10ed287e05c26b292aaccc9d8383225dcaf5262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173376c798cf52c4c0477291a10ed287e05c26b292aaccc9d8383225dcaf5262->enter($__internal_173376c798cf52c4c0477291a10ed287e05c26b292aaccc9d8383225dcaf5262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des bordereaux ";
        
        $__internal_173376c798cf52c4c0477291a10ed287e05c26b292aaccc9d8383225dcaf5262->leave($__internal_173376c798cf52c4c0477291a10ed287e05c26b292aaccc9d8383225dcaf5262_prof);

        
        $__internal_e03a5ea832d7dbbf9221785f36c2025d5a8c817649cbe66128ba5f947806dc3d->leave($__internal_e03a5ea832d7dbbf9221785f36c2025d5a8c817649cbe66128ba5f947806dc3d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_93c8c08c276076a6f5186d77612fc79d66929cd0cef7713354049ccb15bc0938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c8c08c276076a6f5186d77612fc79d66929cd0cef7713354049ccb15bc0938->enter($__internal_93c8c08c276076a6f5186d77612fc79d66929cd0cef7713354049ccb15bc0938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6707ee032f5f638c726aafca0c424c4057c35d62ddd1a5f16a785ba126eb44b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6707ee032f5f638c726aafca0c424c4057c35d62ddd1a5f16a785ba126eb44b2->enter($__internal_6707ee032f5f638c726aafca0c424c4057c35d62ddd1a5f16a785ba126eb44b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Ajouter un IT dans le bordereau
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"1%\"></th>
                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"5%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"23%\">Réf. demande</th>
                                <th width=\"7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["its_in_bl"] ?? $this->getContext($context, "its_in_bl")));
        foreach ($context['_seq'] as $context["_key"] => $context["it_in_bl"]) {
            // line 62
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "uteImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blDebutNumero", array()), "html", null, true);
            echo " ";
            if ($this->getAttribute($context["it_in_bl"], "blFinNumero", array())) {
                echo " à ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blFinNumero", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "refExpr", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["it_in_bl"], "dateRefExpr", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-sm btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_edit", array("id" => $this->getAttribute($context["it_in_bl"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-sm btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_delete", array("id" => $this->getAttribute($context["it_in_bl"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it_in_bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                        </table>

                        ";
        // line 88
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
        
        $__internal_6707ee032f5f638c726aafca0c424c4057c35d62ddd1a5f16a785ba126eb44b2->leave($__internal_6707ee032f5f638c726aafca0c424c4057c35d62ddd1a5f16a785ba126eb44b2_prof);

        
        $__internal_93c8c08c276076a6f5186d77612fc79d66929cd0cef7713354049ccb15bc0938->leave($__internal_93c8c08c276076a6f5186d77612fc79d66929cd0cef7713354049ccb15bc0938_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41e3e1dfe945c6076103f5372bf07cbce87cd9724153e8de8fca3d0f30871b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e3e1dfe945c6076103f5372bf07cbce87cd9724153e8de8fca3d0f30871b2c->enter($__internal_41e3e1dfe945c6076103f5372bf07cbce87cd9724153e8de8fca3d0f30871b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cdb504d3203aa17fa3bf3b583f60771dc5f15833be740fcbfa41f11ff90700a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdb504d3203aa17fa3bf3b583f60771dc5f15833be740fcbfa41f11ff90700a->enter($__internal_4cdb504d3203aa17fa3bf3b583f60771dc5f15833be740fcbfa41f11ff90700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-bl').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_4cdb504d3203aa17fa3bf3b583f60771dc5f15833be740fcbfa41f11ff90700a->leave($__internal_4cdb504d3203aa17fa3bf3b583f60771dc5f15833be740fcbfa41f11ff90700a_prof);

        
        $__internal_41e3e1dfe945c6076103f5372bf07cbce87cd9724153e8de8fca3d0f30871b2c->leave($__internal_41e3e1dfe945c6076103f5372bf07cbce87cd9724153e8de8fca3d0f30871b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtBordereau/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 102,  267 => 101,  246 => 88,  241 => 84,  229 => 78,  222 => 74,  214 => 71,  204 => 70,  200 => 69,  196 => 68,  192 => 67,  188 => 66,  183 => 64,  179 => 62,  175 => 61,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des bordereaux {% endblock %}

{% set menu_bordereau      = true %}
{% set menu_bordereau_list = true %}

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
                    <a href=\"{{ path('bordereau_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Ajouter un IT dans le bordereau
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('bordereau_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th width=\"1%\"></th>
                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"5%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"23%\">Réf. demande</th>
                                <th width=\"7%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for it_in_bl in its_in_bl %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ it_in_bl.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ it_in_bl.blNumero }}</td>
                                    <td>{{ it_in_bl.ctCentre.ctrNom }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.nomImprimeTech }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.uteImprimeTech }}</td>
                                    <td>{{ it_in_bl.blDebutNumero }} {% if (it_in_bl.blFinNumero) %} à {{ it_in_bl.blFinNumero }} {% endif %}</td>
                                    <td>{{ it_in_bl.refExpr }} du {{ it_in_bl.dateRefExpr|date('d/m/Y') }}</td>
                                    <td>
                                        <a class=\"btn btn-sm btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('bordereau_edit', { 'id': it_in_bl.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-sm btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('bordereau_delete', { 'id': it_in_bl.id }) }}\">
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
            \$('#liste-imprime-tech-bl').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtBordereau/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtBordereau\\index.html.twig");
    }
}
