<?php

/* @Admin/CtSourceEnergie/index.html.twig */
class __TwigTemplate_906d4ccb3b9206efa42ecb0d9c559b3c40085312c489509936a795f18e06dabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/index.html.twig", 1);
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
        $__internal_5efb0a890bb3f1d57e9963f58d98c70268dda8972e9e8bd0728cb7544e024870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efb0a890bb3f1d57e9963f58d98c70268dda8972e9e8bd0728cb7544e024870->enter($__internal_5efb0a890bb3f1d57e9963f58d98c70268dda8972e9e8bd0728cb7544e024870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/index.html.twig"));

        $__internal_22c924065f7696d26bdbf01cff834d3d801b449d0bb06525e64ffc8d57f0e44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c924065f7696d26bdbf01cff834d3d801b449d0bb06525e64ffc8d57f0e44b->enter($__internal_22c924065f7696d26bdbf01cff834d3d801b449d0bb06525e64ffc8d57f0e44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/index.html.twig"));

        // line 5
        $context["menu_energie"] = true;
        // line 6
        $context["menu_energie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efb0a890bb3f1d57e9963f58d98c70268dda8972e9e8bd0728cb7544e024870->leave($__internal_5efb0a890bb3f1d57e9963f58d98c70268dda8972e9e8bd0728cb7544e024870_prof);

        
        $__internal_22c924065f7696d26bdbf01cff834d3d801b449d0bb06525e64ffc8d57f0e44b->leave($__internal_22c924065f7696d26bdbf01cff834d3d801b449d0bb06525e64ffc8d57f0e44b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5968ae1a3fd0c23eb46ddf00d28426d708d95fd2fad805ec00dc142f6c95dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5968ae1a3fd0c23eb46ddf00d28426d708d95fd2fad805ec00dc142f6c95dbf->enter($__internal_d5968ae1a3fd0c23eb46ddf00d28426d708d95fd2fad805ec00dc142f6c95dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c13f9659aa2842ee706eb48e217d05d268b3b6469391640e2e6bcc8d59018e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13f9659aa2842ee706eb48e217d05d268b3b6469391640e2e6bcc8d59018e24->enter($__internal_c13f9659aa2842ee706eb48e217d05d268b3b6469391640e2e6bcc8d59018e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des energies ";
        
        $__internal_c13f9659aa2842ee706eb48e217d05d268b3b6469391640e2e6bcc8d59018e24->leave($__internal_c13f9659aa2842ee706eb48e217d05d268b3b6469391640e2e6bcc8d59018e24_prof);

        
        $__internal_d5968ae1a3fd0c23eb46ddf00d28426d708d95fd2fad805ec00dc142f6c95dbf->leave($__internal_d5968ae1a3fd0c23eb46ddf00d28426d708d95fd2fad805ec00dc142f6c95dbf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ecc91140be14ded8fbc71bab36fdd66e8579b762c364d4c05764ce571a8a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ecc91140be14ded8fbc71bab36fdd66e8579b762c364d4c05764ce571a8a18->enter($__internal_60ecc91140be14ded8fbc71bab36fdd66e8579b762c364d4c05764ce571a8a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d0c0f1033565d9b579a02561a2a0ca2e8bcd2d1b6872d9051f2ef3d03dc72e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0c0f1033565d9b579a02561a2a0ca2e8bcd2d1b6872d9051f2ef3d03dc72e5->enter($__internal_8d0c0f1033565d9b579a02561a2a0ca2e8bcd2d1b6872d9051f2ef3d03dc72e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d0c0f1033565d9b579a02561a2a0ca2e8bcd2d1b6872d9051f2ef3d03dc72e5->leave($__internal_8d0c0f1033565d9b579a02561a2a0ca2e8bcd2d1b6872d9051f2ef3d03dc72e5_prof);

        
        $__internal_60ecc91140be14ded8fbc71bab36fdd66e8579b762c364d4c05764ce571a8a18->leave($__internal_60ecc91140be14ded8fbc71bab36fdd66e8579b762c364d4c05764ce571a8a18_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b381e6f8c49297ed294502661585d845b6980a947d3dc3e4010629a6b83a80cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b381e6f8c49297ed294502661585d845b6980a947d3dc3e4010629a6b83a80cf->enter($__internal_b381e6f8c49297ed294502661585d845b6980a947d3dc3e4010629a6b83a80cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8a2977700a1c8660d4ba59d129f1db53841a1683980b62d3515b0340c168943c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2977700a1c8660d4ba59d129f1db53841a1683980b62d3515b0340c168943c->enter($__internal_8a2977700a1c8660d4ba59d129f1db53841a1683980b62d3515b0340c168943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8a2977700a1c8660d4ba59d129f1db53841a1683980b62d3515b0340c168943c->leave($__internal_8a2977700a1c8660d4ba59d129f1db53841a1683980b62d3515b0340c168943c_prof);

        
        $__internal_b381e6f8c49297ed294502661585d845b6980a947d3dc3e4010629a6b83a80cf->leave($__internal_b381e6f8c49297ed294502661585d845b6980a947d3dc3e4010629a6b83a80cf_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/index.html.twig";
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
", "@Admin/CtSourceEnergie/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\index.html.twig");
    }
}
