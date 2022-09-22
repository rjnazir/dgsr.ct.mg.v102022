<?php

/* @Admin/CtDroitPtac/index.html.twig */
class __TwigTemplate_d92ab9cbf09db8ea84e543e1b533d069ae87166264cbe9b3795ecb2e9655f0e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtDroitPtac/index.html.twig", 1);
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
        $__internal_64900f808378cb49ffa55f42ceb13d8bd9bfe1f3110ce10806a26dbc98118b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64900f808378cb49ffa55f42ceb13d8bd9bfe1f3110ce10806a26dbc98118b86->enter($__internal_64900f808378cb49ffa55f42ceb13d8bd9bfe1f3110ce10806a26dbc98118b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/index.html.twig"));

        $__internal_48991fc81cb94d277a491449888d9a48321a5dc48ab8610d2f8a643bd31b9679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48991fc81cb94d277a491449888d9a48321a5dc48ab8610d2f8a643bd31b9679->enter($__internal_48991fc81cb94d277a491449888d9a48321a5dc48ab8610d2f8a643bd31b9679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/index.html.twig"));

        // line 5
        $context["menu_droit_ptac"] = true;
        // line 6
        $context["menu_droit_ptac_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64900f808378cb49ffa55f42ceb13d8bd9bfe1f3110ce10806a26dbc98118b86->leave($__internal_64900f808378cb49ffa55f42ceb13d8bd9bfe1f3110ce10806a26dbc98118b86_prof);

        
        $__internal_48991fc81cb94d277a491449888d9a48321a5dc48ab8610d2f8a643bd31b9679->leave($__internal_48991fc81cb94d277a491449888d9a48321a5dc48ab8610d2f8a643bd31b9679_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_722133e474cf7a8b1e6c862c95772a08a271b0f4de5ff8b765abc41086780e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722133e474cf7a8b1e6c862c95772a08a271b0f4de5ff8b765abc41086780e40->enter($__internal_722133e474cf7a8b1e6c862c95772a08a271b0f4de5ff8b765abc41086780e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a18924fcc81c517bbcb271c9952b1691dec9a05bd3420cebe72669e08f3ddaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18924fcc81c517bbcb271c9952b1691dec9a05bd3420cebe72669e08f3ddaab->enter($__internal_a18924fcc81c517bbcb271c9952b1691dec9a05bd3420cebe72669e08f3ddaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des Droits Ptac ";
        
        $__internal_a18924fcc81c517bbcb271c9952b1691dec9a05bd3420cebe72669e08f3ddaab->leave($__internal_a18924fcc81c517bbcb271c9952b1691dec9a05bd3420cebe72669e08f3ddaab_prof);

        
        $__internal_722133e474cf7a8b1e6c862c95772a08a271b0f4de5ff8b765abc41086780e40->leave($__internal_722133e474cf7a8b1e6c862c95772a08a271b0f4de5ff8b765abc41086780e40_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_69475b3866a8c78c1fb2abb522b46b407b98dd31e91f15b360e29416c4c25fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69475b3866a8c78c1fb2abb522b46b407b98dd31e91f15b360e29416c4c25fc9->enter($__internal_69475b3866a8c78c1fb2abb522b46b407b98dd31e91f15b360e29416c4c25fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88ba2fbc24dab96bca25f86d2dada7573e26eadb7bf6bbb302c60005e905c20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ba2fbc24dab96bca25f86d2dada7573e26eadb7bf6bbb302c60005e905c20e->enter($__internal_88ba2fbc24dab96bca25f86d2dada7573e26eadb7bf6bbb302c60005e905c20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Droit ptac
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                    <th>Genre</th>
                                     <th>Poids minimum (T)</th>
                                     <th>Poids maximum (T)</th>
                                     <th>Droit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["droit_ptacs"] ?? $this->getContext($context, "droit_ptacs")));
        foreach ($context['_seq'] as $context["_key"] => $context["droit_ptac"]) {
            // line 61
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["droit_ptac"], "ctTypeDroitPtac", array()), "tpDpLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["droit_ptac"], "ctGenreCategorie", array()), "gcLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpPrixMin", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpPrixMax", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["droit_ptac"], "dpDroit", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_edit", array("id" => $this->getAttribute($context["droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_delete", array("id" => $this->getAttribute($context["droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['droit_ptac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            </tbody>
                        </table>

                        ";
        // line 86
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
        
        $__internal_88ba2fbc24dab96bca25f86d2dada7573e26eadb7bf6bbb302c60005e905c20e->leave($__internal_88ba2fbc24dab96bca25f86d2dada7573e26eadb7bf6bbb302c60005e905c20e_prof);

        
        $__internal_69475b3866a8c78c1fb2abb522b46b407b98dd31e91f15b360e29416c4c25fc9->leave($__internal_69475b3866a8c78c1fb2abb522b46b407b98dd31e91f15b360e29416c4c25fc9_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1f9b9fee579cb63f5c7af869551b0d3f0b1c40ea43a74dd9f68a4efe40d79df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f9b9fee579cb63f5c7af869551b0d3f0b1c40ea43a74dd9f68a4efe40d79df->enter($__internal_f1f9b9fee579cb63f5c7af869551b0d3f0b1c40ea43a74dd9f68a4efe40d79df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cdbc4004f1c06e176cbd71bc404a20d36799395bcf07ae8315052d21d26fa4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbc4004f1c06e176cbd71bc404a20d36799395bcf07ae8315052d21d26fa4bc->enter($__internal_cdbc4004f1c06e176cbd71bc404a20d36799395bcf07ae8315052d21d26fa4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucune droit_ptac trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_cdbc4004f1c06e176cbd71bc404a20d36799395bcf07ae8315052d21d26fa4bc->leave($__internal_cdbc4004f1c06e176cbd71bc404a20d36799395bcf07ae8315052d21d26fa4bc_prof);

        
        $__internal_f1f9b9fee579cb63f5c7af869551b0d3f0b1c40ea43a74dd9f68a4efe40d79df->leave($__internal_f1f9b9fee579cb63f5c7af869551b0d3f0b1c40ea43a74dd9f68a4efe40d79df_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtDroitPtac/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 100,  254 => 99,  233 => 86,  228 => 82,  216 => 76,  209 => 72,  203 => 69,  199 => 68,  195 => 67,  191 => 66,  187 => 65,  182 => 63,  178 => 61,  174 => 60,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des Droits Ptac {% endblock %}

{% set menu_droit_ptac           = true %}
{% set menu_droit_ptac_list      = true %}

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
                    <a href=\"{{ path('droit_ptac_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un Droit ptac
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('droit_ptac_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Type</th>
                                    <th>Genre</th>
                                     <th>Poids minimum (T)</th>
                                     <th>Poids maximum (T)</th>
                                     <th>Droit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for droit_ptac in droit_ptacs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ droit_ptac.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ droit_ptac.ctTypeDroitPtac.tpDpLibelle }}</td>
                                        <td>{{ droit_ptac.ctGenreCategorie.gcLibelle }}</td>
                                        <td>{{ droit_ptac.dpPrixMin }}</td>
                                        <td>{{ droit_ptac.dpPrixMax }}</td>
                                        <td>{{ droit_ptac.dpDroit }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('droit_ptac_edit', { 'id': droit_ptac.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('droit_ptac_delete', { 'id': droit_ptac.id }) }}\">
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
            \$('#list-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucune droit_ptac trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtDroitPtac/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtDroitPtac\\index.html.twig");
    }
}
