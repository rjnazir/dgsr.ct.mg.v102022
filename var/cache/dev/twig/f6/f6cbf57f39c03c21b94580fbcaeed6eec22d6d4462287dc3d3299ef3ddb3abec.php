<?php

/* AdminBundle:CtMotifTarif:index.html.twig */
class __TwigTemplate_e49b322ce2b13f0322c756dcc6278ad77608eae6d2ffc4077e4fdc23ee6f1def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotifTarif:index.html.twig", 1);
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
        $__internal_88bc14534b632f8f3b5866517f251296e9d45c938de7720b5651125e58f67090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bc14534b632f8f3b5866517f251296e9d45c938de7720b5651125e58f67090->enter($__internal_88bc14534b632f8f3b5866517f251296e9d45c938de7720b5651125e58f67090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:index.html.twig"));

        $__internal_288e5858568fb1a468118dbe46a5d5a1a3f615cc21771d52cca0fe6c8a46d659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288e5858568fb1a468118dbe46a5d5a1a3f615cc21771d52cca0fe6c8a46d659->enter($__internal_288e5858568fb1a468118dbe46a5d5a1a3f615cc21771d52cca0fe6c8a46d659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:index.html.twig"));

        // line 5
        $context["menu_motif"] = true;
        // line 6
        $context["menu_motif_tarif"] = true;
        // line 7
        $context["menu_motif_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88bc14534b632f8f3b5866517f251296e9d45c938de7720b5651125e58f67090->leave($__internal_88bc14534b632f8f3b5866517f251296e9d45c938de7720b5651125e58f67090_prof);

        
        $__internal_288e5858568fb1a468118dbe46a5d5a1a3f615cc21771d52cca0fe6c8a46d659->leave($__internal_288e5858568fb1a468118dbe46a5d5a1a3f615cc21771d52cca0fe6c8a46d659_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0591bee782d2689aa568aa1add40be803c8c9240b96f66c66448dba2654896e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0591bee782d2689aa568aa1add40be803c8c9240b96f66c66448dba2654896e4->enter($__internal_0591bee782d2689aa568aa1add40be803c8c9240b96f66c66448dba2654896e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cb4dd3a4e97026a7206a1c86b0268d54f60ed293f5981ceb2594c2e7f8c1134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb4dd3a4e97026a7206a1c86b0268d54f60ed293f5981ceb2594c2e7f8c1134->enter($__internal_3cb4dd3a4e97026a7206a1c86b0268d54f60ed293f5981ceb2594c2e7f8c1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des motifs ";
        
        $__internal_3cb4dd3a4e97026a7206a1c86b0268d54f60ed293f5981ceb2594c2e7f8c1134->leave($__internal_3cb4dd3a4e97026a7206a1c86b0268d54f60ed293f5981ceb2594c2e7f8c1134_prof);

        
        $__internal_0591bee782d2689aa568aa1add40be803c8c9240b96f66c66448dba2654896e4->leave($__internal_0591bee782d2689aa568aa1add40be803c8c9240b96f66c66448dba2654896e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd931e3922ec01818abfee731e51f86a8bbf051b29a82a6a2268324aeb0d21af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd931e3922ec01818abfee731e51f86a8bbf051b29a82a6a2268324aeb0d21af->enter($__internal_cd931e3922ec01818abfee731e51f86a8bbf051b29a82a6a2268324aeb0d21af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b22248cacc9aa8930ec24ee96e1c8ed1b953ac746913001642dccea5b215dbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22248cacc9aa8930ec24ee96e1c8ed1b953ac746913001642dccea5b215dbc9->enter($__internal_b22248cacc9aa8930ec24ee96e1c8ed1b953ac746913001642dccea5b215dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du motif
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
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
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 61
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 67
            if ($this->getAttribute($context["motif"], "mtfTrfPrix", array(), "any", true, true)) {
                // line 68
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfTrfPrix", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 70
            echo "                                    </td>
                                    <td>
                                        ";
            // line 72
            if ($this->getAttribute($context["motif"], "mtfTrfDate", array(), "any", true, true)) {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfTrfDate", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_edit", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_delete", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
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
        
        $__internal_b22248cacc9aa8930ec24ee96e1c8ed1b953ac746913001642dccea5b215dbc9->leave($__internal_b22248cacc9aa8930ec24ee96e1c8ed1b953ac746913001642dccea5b215dbc9_prof);

        
        $__internal_cd931e3922ec01818abfee731e51f86a8bbf051b29a82a6a2268324aeb0d21af->leave($__internal_cd931e3922ec01818abfee731e51f86a8bbf051b29a82a6a2268324aeb0d21af_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75aa4dbb2f70f240efef2b49da50493c61a90930e8b8b87a6931bb30e9a0d15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75aa4dbb2f70f240efef2b49da50493c61a90930e8b8b87a6931bb30e9a0d15c->enter($__internal_75aa4dbb2f70f240efef2b49da50493c61a90930e8b8b87a6931bb30e9a0d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_573787812ac297d50343dbd637e321428b2ec203a62f2515dfe932c5b35334c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573787812ac297d50343dbd637e321428b2ec203a62f2515dfe932c5b35334c1->enter($__internal_573787812ac297d50343dbd637e321428b2ec203a62f2515dfe932c5b35334c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_573787812ac297d50343dbd637e321428b2ec203a62f2515dfe932c5b35334c1->leave($__internal_573787812ac297d50343dbd637e321428b2ec203a62f2515dfe932c5b35334c1_prof);

        
        $__internal_75aa4dbb2f70f240efef2b49da50493c61a90930e8b8b87a6931bb30e9a0d15c->leave($__internal_75aa4dbb2f70f240efef2b49da50493c61a90930e8b8b87a6931bb30e9a0d15c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotifTarif:index.html.twig";
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

{% block title %}{{ parent() }} Liste des motifs {% endblock %}

{% set menu_motif            = true %}
{% set menu_motif_tarif      = true %}
{% set menu_motif_tarif_list = true %}


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
                    <a href=\"{{ path('motif_tarif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du motif
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('motif_tarif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
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
                            {% for motif in motifs %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ motif.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ motif.mtfLibelle }}</td>
                                    <td>
                                        {% if motif.mtfTrfPrix is defined %}
                                            {{ motif.mtfTrfPrix }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if motif.mtfTrfDate is defined %}
                                            {{ motif.mtfTrfDate }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('motif_tarif_edit', { 'id': motif.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('motif_tarif_delete', { 'id': motif.id }) }}\">
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
            \$('#list-motif').DataTable(
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
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtMotifTarif:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotifTarif/index.html.twig");
    }
}
