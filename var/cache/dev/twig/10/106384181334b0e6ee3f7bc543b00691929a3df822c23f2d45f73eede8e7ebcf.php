<?php

/* AdminBundle:CtTypeVisite:index.html.twig */
class __TwigTemplate_669e5a2f9ee0f8a02fa3e80b8b8244cbcb88b4c13c79b6795f01ab10201666b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:index.html.twig", 1);
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
        $__internal_12ac9cecc72a99725743499a3760768661984474585aba74ddf430e59fa09cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ac9cecc72a99725743499a3760768661984474585aba74ddf430e59fa09cae->enter($__internal_12ac9cecc72a99725743499a3760768661984474585aba74ddf430e59fa09cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:index.html.twig"));

        $__internal_1f780fbc2acaf63420c74b0f43df43e9cb1a1263a875e6cbf724eef062bce6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f780fbc2acaf63420c74b0f43df43e9cb1a1263a875e6cbf724eef062bce6b5->enter($__internal_1f780fbc2acaf63420c74b0f43df43e9cb1a1263a875e6cbf724eef062bce6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:index.html.twig"));

        // line 5
        $context["menu_visite"] = true;
        // line 6
        $context["menu_type_visite"] = true;
        // line 7
        $context["menu_type_visite_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ac9cecc72a99725743499a3760768661984474585aba74ddf430e59fa09cae->leave($__internal_12ac9cecc72a99725743499a3760768661984474585aba74ddf430e59fa09cae_prof);

        
        $__internal_1f780fbc2acaf63420c74b0f43df43e9cb1a1263a875e6cbf724eef062bce6b5->leave($__internal_1f780fbc2acaf63420c74b0f43df43e9cb1a1263a875e6cbf724eef062bce6b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82c8d3bba5a5fdc00404c631b89941d0f729cb0898b601c0ca20c7e894bc6521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c8d3bba5a5fdc00404c631b89941d0f729cb0898b601c0ca20c7e894bc6521->enter($__internal_82c8d3bba5a5fdc00404c631b89941d0f729cb0898b601c0ca20c7e894bc6521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2869c5c85bfd43104ae19024edc25671046d143a1a771b71372528dec859144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2869c5c85bfd43104ae19024edc25671046d143a1a771b71372528dec859144->enter($__internal_d2869c5c85bfd43104ae19024edc25671046d143a1a771b71372528dec859144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_d2869c5c85bfd43104ae19024edc25671046d143a1a771b71372528dec859144->leave($__internal_d2869c5c85bfd43104ae19024edc25671046d143a1a771b71372528dec859144_prof);

        
        $__internal_82c8d3bba5a5fdc00404c631b89941d0f729cb0898b601c0ca20c7e894bc6521->leave($__internal_82c8d3bba5a5fdc00404c631b89941d0f729cb0898b601c0ca20c7e894bc6521_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e3489a16a9d2d376e3693a051d2865f77aac0ddbfdef23e6bd2b4f5bb631d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3489a16a9d2d376e3693a051d2865f77aac0ddbfdef23e6bd2b4f5bb631d47->enter($__internal_1e3489a16a9d2d376e3693a051d2865f77aac0ddbfdef23e6bd2b4f5bb631d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbc8c84691a305dc8f15455080011a61e4f5ef978de33cc5c2cc58f8233a952d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc8c84691a305dc8f15455080011a61e4f5ef978de33cc5c2cc58f8233a952d->enter($__internal_cbc8c84691a305dc8f15455080011a61e4f5ef978de33cc5c2cc58f8233a952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de visite
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_visites"] ?? $this->getContext($context, "type_visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_visite"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_visite"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_visite"], "tpvLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_edit", array("id" => $this->getAttribute($context["type_visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_delete", array("id" => $this->getAttribute($context["type_visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_cbc8c84691a305dc8f15455080011a61e4f5ef978de33cc5c2cc58f8233a952d->leave($__internal_cbc8c84691a305dc8f15455080011a61e4f5ef978de33cc5c2cc58f8233a952d_prof);

        
        $__internal_1e3489a16a9d2d376e3693a051d2865f77aac0ddbfdef23e6bd2b4f5bb631d47->leave($__internal_1e3489a16a9d2d376e3693a051d2865f77aac0ddbfdef23e6bd2b4f5bb631d47_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b13757376527152bf3816b6a8396eb161e8222a6441e392aa2095d7cdd255c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b13757376527152bf3816b6a8396eb161e8222a6441e392aa2095d7cdd255c7->enter($__internal_2b13757376527152bf3816b6a8396eb161e8222a6441e392aa2095d7cdd255c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5ff63f04f5ae9be6bbe1ec635f6edf503434d560d0327fc31102d562b6fe69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ff63f04f5ae9be6bbe1ec635f6edf503434d560d0327fc31102d562b6fe69e->enter($__internal_c5ff63f04f5ae9be6bbe1ec635f6edf503434d560d0327fc31102d562b6fe69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de visite trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_c5ff63f04f5ae9be6bbe1ec635f6edf503434d560d0327fc31102d562b6fe69e->leave($__internal_c5ff63f04f5ae9be6bbe1ec635f6edf503434d560d0327fc31102d562b6fe69e_prof);

        
        $__internal_2b13757376527152bf3816b6a8396eb161e8222a6441e392aa2095d7cdd255c7->leave($__internal_2b13757376527152bf3816b6a8396eb161e8222a6441e392aa2095d7cdd255c7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des types d' anomalies {% endblock %}

{% set menu_visite           = true %}
{% set menu_type_visite      = true %}
{% set menu_type_visite_list = true %}

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
                    <a href=\"{{ path('type_visite_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de visite
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_visite_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for type_visite in type_visites %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ type_visite.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ type_visite.tpvLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('type_visite_edit', { 'id': type_visite.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('type_visite_delete', { 'id': type_visite.id }) }}\">
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
            \$('#list-type-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de visite trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeVisite:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/index.html.twig");
    }
}
