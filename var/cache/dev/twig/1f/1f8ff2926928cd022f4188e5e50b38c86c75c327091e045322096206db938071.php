<?php

/* @Admin/CtMarque/index.html.twig */
class __TwigTemplate_282e55a141a161f4bdea363e83b415cef009247a832344b107e02ae34fa81375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/index.html.twig", 1);
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
        $__internal_2337ec0b3c7b2e12d97f6ce178e64608395c22b2690cfdfd36b8479d0f212a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2337ec0b3c7b2e12d97f6ce178e64608395c22b2690cfdfd36b8479d0f212a72->enter($__internal_2337ec0b3c7b2e12d97f6ce178e64608395c22b2690cfdfd36b8479d0f212a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/index.html.twig"));

        $__internal_609923eefd848fdb931795e70c005a0ad2675fc907431be1e7cf4fd485919e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609923eefd848fdb931795e70c005a0ad2675fc907431be1e7cf4fd485919e11->enter($__internal_609923eefd848fdb931795e70c005a0ad2675fc907431be1e7cf4fd485919e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/index.html.twig"));

        // line 5
        $context["menu_marque"] = true;
        // line 6
        $context["menu_marque_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2337ec0b3c7b2e12d97f6ce178e64608395c22b2690cfdfd36b8479d0f212a72->leave($__internal_2337ec0b3c7b2e12d97f6ce178e64608395c22b2690cfdfd36b8479d0f212a72_prof);

        
        $__internal_609923eefd848fdb931795e70c005a0ad2675fc907431be1e7cf4fd485919e11->leave($__internal_609923eefd848fdb931795e70c005a0ad2675fc907431be1e7cf4fd485919e11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_928eeb037e5bd174506433e18cf41dfeec1c29acae01b086e128b104271c983d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928eeb037e5bd174506433e18cf41dfeec1c29acae01b086e128b104271c983d->enter($__internal_928eeb037e5bd174506433e18cf41dfeec1c29acae01b086e128b104271c983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_813072c1b9a32c6136796829cb2611e38e175c71199281185b35120493d56a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813072c1b9a32c6136796829cb2611e38e175c71199281185b35120493d56a86->enter($__internal_813072c1b9a32c6136796829cb2611e38e175c71199281185b35120493d56a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des marques ";
        
        $__internal_813072c1b9a32c6136796829cb2611e38e175c71199281185b35120493d56a86->leave($__internal_813072c1b9a32c6136796829cb2611e38e175c71199281185b35120493d56a86_prof);

        
        $__internal_928eeb037e5bd174506433e18cf41dfeec1c29acae01b086e128b104271c983d->leave($__internal_928eeb037e5bd174506433e18cf41dfeec1c29acae01b086e128b104271c983d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2236c18355caeb896b5349229590ce5f07298c9b1547d17623f7c7d1aae9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2236c18355caeb896b5349229590ce5f07298c9b1547d17623f7c7d1aae9d0->enter($__internal_4c2236c18355caeb896b5349229590ce5f07298c9b1547d17623f7c7d1aae9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c12f90b07675b5f13d4b8cad4197adc32529292c0d5f17513afe087464c9071e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12f90b07675b5f13d4b8cad4197adc32529292c0d5f17513afe087464c9071e->enter($__internal_c12f90b07675b5f13d4b8cad4197adc32529292c0d5f17513afe087464c9071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
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
        $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "mrqLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_edit", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
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
        
        $__internal_c12f90b07675b5f13d4b8cad4197adc32529292c0d5f17513afe087464c9071e->leave($__internal_c12f90b07675b5f13d4b8cad4197adc32529292c0d5f17513afe087464c9071e_prof);

        
        $__internal_4c2236c18355caeb896b5349229590ce5f07298c9b1547d17623f7c7d1aae9d0->leave($__internal_4c2236c18355caeb896b5349229590ce5f07298c9b1547d17623f7c7d1aae9d0_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c95e365e19a6a0da68e291c7f4c3d22187394fad239d906c20d7517e7664922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c95e365e19a6a0da68e291c7f4c3d22187394fad239d906c20d7517e7664922->enter($__internal_2c95e365e19a6a0da68e291c7f4c3d22187394fad239d906c20d7517e7664922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0eff19c1a6596695db0d9e1b55bdd601206dc455767464473eac88e9ab48a2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eff19c1a6596695db0d9e1b55bdd601206dc455767464473eac88e9ab48a2c7->enter($__internal_0eff19c1a6596695db0d9e1b55bdd601206dc455767464473eac88e9ab48a2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-marque').DataTable(
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
        
        $__internal_0eff19c1a6596695db0d9e1b55bdd601206dc455767464473eac88e9ab48a2c7->leave($__internal_0eff19c1a6596695db0d9e1b55bdd601206dc455767464473eac88e9ab48a2c7_prof);

        
        $__internal_2c95e365e19a6a0da68e291c7f4c3d22187394fad239d906c20d7517e7664922->leave($__internal_2c95e365e19a6a0da68e291c7f4c3d22187394fad239d906c20d7517e7664922_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/index.html.twig";
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

{% block title %}{{ parent() }} Liste des marques {% endblock %}

{% set menu_marque      = true %}
{% set menu_marque_list = true %}

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
                    <a href=\"{{ path('marque_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('marque_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for marque in marques %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ marque.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ marque.mrqLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('marque_edit', { 'id': marque.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('marque_delete', { 'id': marque.id }) }}\">
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
            \$('#list-marque').DataTable(
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
", "@Admin/CtMarque/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\index.html.twig");
    }
}
