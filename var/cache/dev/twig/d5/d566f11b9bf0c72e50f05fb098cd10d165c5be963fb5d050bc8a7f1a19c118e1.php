<?php

/* AdminBundle:CtMotif:add.html.twig */
class __TwigTemplate_b1b3e47d3fd60223892ccef78deea89175582d3fd735a9f5273a59ce73daa165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_179c9d153ad3812bb74bd19902e62ff45930e0eca65d4e987b72463b9ac45f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179c9d153ad3812bb74bd19902e62ff45930e0eca65d4e987b72463b9ac45f9e->enter($__internal_179c9d153ad3812bb74bd19902e62ff45930e0eca65d4e987b72463b9ac45f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        $__internal_0a00f02c5dc747bb249d1431fab74c7cd61c47e859808f521aebc0a6e21875ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a00f02c5dc747bb249d1431fab74c7cd61c47e859808f521aebc0a6e21875ec->enter($__internal_0a00f02c5dc747bb249d1431fab74c7cd61c47e859808f521aebc0a6e21875ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_type"] = true;
        // line 9
        $context["menu_motif_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179c9d153ad3812bb74bd19902e62ff45930e0eca65d4e987b72463b9ac45f9e->leave($__internal_179c9d153ad3812bb74bd19902e62ff45930e0eca65d4e987b72463b9ac45f9e_prof);

        
        $__internal_0a00f02c5dc747bb249d1431fab74c7cd61c47e859808f521aebc0a6e21875ec->leave($__internal_0a00f02c5dc747bb249d1431fab74c7cd61c47e859808f521aebc0a6e21875ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e61a213b00283d15229b57b15ced2d487353496ea3d2edb2856a10490ca9ec44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61a213b00283d15229b57b15ced2d487353496ea3d2edb2856a10490ca9ec44->enter($__internal_e61a213b00283d15229b57b15ced2d487353496ea3d2edb2856a10490ca9ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ddeecbfb818ffdb02867ca248e43dea9afd5aa922d7ab96fc53aa6f4abc64b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddeecbfb818ffdb02867ca248e43dea9afd5aa922d7ab96fc53aa6f4abc64b0->enter($__internal_8ddeecbfb818ffdb02867ca248e43dea9afd5aa922d7ab96fc53aa6f4abc64b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_8ddeecbfb818ffdb02867ca248e43dea9afd5aa922d7ab96fc53aa6f4abc64b0->leave($__internal_8ddeecbfb818ffdb02867ca248e43dea9afd5aa922d7ab96fc53aa6f4abc64b0_prof);

        
        $__internal_e61a213b00283d15229b57b15ced2d487353496ea3d2edb2856a10490ca9ec44->leave($__internal_e61a213b00283d15229b57b15ced2d487353496ea3d2edb2856a10490ca9ec44_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97b91b5709bd4ffed22b6b0e6f754c77d24894281d5bfa9a40f572a5b584d8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b91b5709bd4ffed22b6b0e6f754c77d24894281d5bfa9a40f572a5b584d8c0->enter($__internal_97b91b5709bd4ffed22b6b0e6f754c77d24894281d5bfa9a40f572a5b584d8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7886b547c5f33d1302441240edb7ffbd925f78e064704c5220c1844bdc3c987f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7886b547c5f33d1302441240edb7ffbd925f78e064704c5220c1844bdc3c987f->enter($__internal_7886b547c5f33d1302441240edb7ffbd925f78e064704c5220c1844bdc3c987f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7886b547c5f33d1302441240edb7ffbd925f78e064704c5220c1844bdc3c987f->leave($__internal_7886b547c5f33d1302441240edb7ffbd925f78e064704c5220c1844bdc3c987f_prof);

        
        $__internal_97b91b5709bd4ffed22b6b0e6f754c77d24894281d5bfa9a40f572a5b584d8c0->leave($__internal_97b91b5709bd4ffed22b6b0e6f754c77d24894281d5bfa9a40f572a5b584d8c0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_create = true %}

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
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.mtfLibelle) }}
                        {{ form_row(form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotif:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/add.html.twig");
    }
}
